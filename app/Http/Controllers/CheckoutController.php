<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = $this->getUserCart();
        $cart->load('items.product'); // Cargar las relaciones de items y product
        $cartSummary = $this->calculateCartSummary($cart);

        $amountInCents = $cartSummary['total'] * 100; // Convertir a centavos
        $reference = '0001'; // Genera una referencia única para cada transacción
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
        $cart->load('items.product'); // Cargar las relaciones de items y product
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
    $secret = 'test_integrity_6UM6RMuex6BBU7BxJ52PXXIOPllOxeoL'; // Asegúrate de tener este valor correcto y en un lugar seguro, como en el archivo .env
    $stringToSign = "{$reference}{$amountInCents}{$currency}{$secret}";
    return hash('sha256', $stringToSign);
}

}
