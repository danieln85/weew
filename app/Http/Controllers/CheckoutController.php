<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        // Solo permitir acceso a usuarios autenticados
        $this->middleware('auth');
    }

    public function index()
    {
        $cart = $this->getUserCart();
        if ($cart->items->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'El carrito está vacío.');
        }
        
        $cart->load('items.product');
        $cartSummary = $this->calculateCartSummary($cart);

        $amountInCents = $cartSummary['total'] * 100;
        $reference = $this->generateReference();
        $integrity = $this->generateIntegritySignature($amountInCents, 'COP', $reference);

        // Convertir los items del carrito a un array y almacenar en la sesión
        $cartItemsArray = $cart->items->toArray();
        session(['cart_items' => $cartItemsArray]);
        session(['reference' => $reference]);
        session(['total_amount' => $cartSummary['total']]);

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
        if ($cart->items->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'El carrito está vacío.');
        }

        $cart->load('items.product');
        $cartSummary = $this->calculateCartSummary($cart);

        return view('summary', array_merge(['cart' => $cart], $cartSummary));
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
        $secret = env('WOMPI_INTEGRITY_SECRET');// Asegúrate de tener este valor correcto y en un lugar seguro, como en el archivo .env
        $stringToSign = "{$reference}{$amountInCents}{$currency}{$secret}";
        return hash('sha256', $stringToSign);
    }

    private function generateReference()
    {
        // Obtener el año actual
        $currentYear = date('Y');

        // Obtener la última orden del año actual
        $lastOrder = Order::where('reference', 'like', $currentYear . '%')->orderBy('reference', 'desc')->first();

        if ($lastOrder) {
            // Extraer el número incremental de la última referencia
            $lastNumber = (int) substr($lastOrder->reference, 4); // Obtener los últimos dos dígitos de la referencia
            $newNumber = $lastNumber + 1; // Incrementar el número en 1
        } else {
            $newNumber = 0; // Si no hay órdenes anteriores en el año, comenzar en 00
        }

        // Formatear la nueva referencia
        return $currentYear . str_pad($newNumber, 2, '0', STR_PAD_LEFT);
    }
}
