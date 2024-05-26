<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = $this->getUserCart();
        $cart->load('items.product');
        $cartSummary = $this->calculateCartSummary($cart);

        $amountInCents = $cartSummary['total'] * 100;
        $reference = $this->generateReference();
        $integrity = $this->generateIntegritySignature($amountInCents, 'COP', $reference);

        return view('checkout', array_merge([
            'cart' => $cart,
            'amountInCents' => $amountInCents,
            'reference' => $reference,
            'integrity' => $integrity
        ], $cartSummary));
    }

    public function summary()
    {
        $cart = $this->getUserCart();
        $cart->load('items.product');
        $cartSummary = $this->calculateCartSummary($cart);

        return view('summary', array_merge(['cart' => $cart], $cartSummary));
    }

    public function processPayment(Request $request)
    {
        $cart = $this->getUserCart();

        // Verificar si el usuario está autenticado antes de continuar
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para realizar un pedido.');
        }

        // Crear la orden
        $order = new Order();
        $order->user_id = Auth::id();
        $order->reference = $request->input('reference');
        $order->total_amount = $request->input('amount_in_cents');
        $order->status = 'paid';

        // Intentar guardar la orden
        try {
            $order->save();

            // Guardar los elementos de la orden
            foreach ($cart->items as $item) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $item->product_id;
                $orderItem->quantity = $item->quantity;
                $orderItem->price = $item->price;
                $orderItem->save();
            }

            // Vaciar el carrito después de que la orden se haya creado exitosamente
            $cart->items()->delete();
            $cart->delete();

            // Redirigir a la URL de confirmación con el ID de la orden
            return redirect()->route('confirmation', ['order' => $order->id]);
        } catch (\Exception $e) {
            // Manejar errores de base de datos u otros errores
            return redirect()->back()->with('error', 'Ha ocurrido un error al procesar el pago. Por favor, inténtalo de nuevo más tarde.');
        }
    }

    private function getUserCart()
    {
        $userId = Auth::id();
        return Cart::firstOrCreate(['user_id' => $userId]);
    }

    private function calculateCartSummary($cart)
    {
        $subtotal = 0;
        $totalAhorrado = 0;
        $costoEnvio = 0;

        foreach ($cart->items as $item) {
            $precioOriginal = $item->product->precio;
            $precioConDescuento = $precioOriginal - (($precioOriginal * $item->product->descuento) / 100);
            $precioFinal = (!empty($item->product->descuento) && is_numeric($item->product->descuento) && $item->product->descuento > 0) ? $precioConDescuento : $item->price;

            $subtotal += $precioFinal * $item->quantity;
            $totalAhorrado += ($precioOriginal - $precioFinal) * $item->quantity;
        }

        $userCity = Auth::user()->city;

        if ($userCity != 'Bogota') {
            $costoEnvio = 20000;
        }

        return [
            'subtotal' => $subtotal,
            'totalAhorrado' => $totalAhorrado,
            'costoEnvio' => $costoEnvio,
            'total' => $subtotal + $costoEnvio
        ];
    }

    private function generateIntegritySignature($amountInCents, $currency, $reference)
    {
        $secret = 'test_integrity_6UM6RMuex6BBU7BxJ52PXXIOPllOxeoL'; // Asegúrate de tener este valor correcto y en un lugar seguro, como en el archivo .env
        $stringToSign = "{$reference}{$amountInCents}{$currency}{$secret}";
        return hash('sha256', $stringToSign);
    }

    private function generateReference()
    {
        $lastOrder = Order::orderBy('id', 'desc')->first();
        if ($lastOrder) {
            $lastReference = (int) substr($lastOrder->reference, 3); // Obtener el último número de la referencia
            $newReference = $lastReference + 1; // Incrementar el último número en 1
        } else {
            $newReference = 2; // Si no hay órdenes anteriores, comenzar en 2
        }
        return 'REF' . str_pad(4, 4, '0', STR_PAD_LEFT); // Formatear el nuevo número con ceros a la izquierda
    }
}
