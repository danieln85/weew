<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class OrderController extends Controller
{
    public function confirmation(Request $request)
    {
        // Obtener el wompiId de la query en la URL
        $wompiId = $request->input('id');

        // Verificar si el wompiId es válido y la transacción está aprobada
        if (!$wompiId || !$this->checkTransaction($wompiId)) {
            return redirect()->route('cart.index')->with('error', 'Transacción no válida o no aprobada.');
        }

        // Obtener los items del carrito y la referencia de la sesión
        $cartItems = session('cart_items');
        $reference = session('reference');
        $totalAmount = session('total_amount');

        // Verificar si hay items en el carrito de la sesión
        if (!$cartItems) {
            return redirect()->route('checkout')->with('error', 'No hay elementos en el carrito.');
        }

        // Verificar si una orden con el mismo wompiId ya existe para evitar duplicados
        $existingOrder = Order::where('wompi_id', $wompiId)->first();
        if ($existingOrder) {
            // Si la orden ya existe, redirigir al carrito para evitar duplicados
            return redirect()->route('cart.index')->with('message', 'La orden ya fue procesada.');
        }

        // Verificar si una orden con la misma referencia ya existe para evitar duplicados
        $existingReference = Order::where('reference', $reference)->first();
        if ($existingReference) {
            // Si la orden ya existe, redirigir al carrito para evitar duplicados
            return redirect()->route('cart.index')->with('message', 'La orden ya fue procesada.');
        }

        // Crear una nueva orden
        $order = new Order();
        $order->user_id = Auth::id();
        $order->reference = $reference;
        $order->wompi_id = $wompiId;
        $order->total_amount = $totalAmount;
        $order->status = 'paid';
        $order->save();

        // Guardar los elementos del carrito en la nueva orden
        foreach ($cartItems as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item['product_id'];
            $orderItem->quantity = $item['quantity'];
            $orderItem->price = $item['price'];
            $orderItem->save();
        }

        // Vaciar el carrito del usuario
        $cart = Cart::where('user_id', Auth::id())->first();
        if ($cart) {
            $cart->items()->delete();
            $cart->delete();
        }

        // Redirigir a la vista de confirmación con la orden
        return view('confirmation', compact('order'));
    }

    private function checkTransaction($wompiId)
    {
        $client = new Client();
        // Usar URL de sandbox durante las pruebas
        $url = "https://sandbox.wompi.co/v1/transactions/{$wompiId}";

        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('WOMPI_PRIVATE_KEY')
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            if ($data['data']['status'] === 'APPROVED') {
                return true;
            }
            return false;
        } catch (\Exception $e) {
            // Manejar las excepciones apropiadamente
            return false;
        }
    }
}
