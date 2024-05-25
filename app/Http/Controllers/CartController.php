<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = $this->getUserCart();
        $cart->load('items.product'); // Cargar las relaciones de items y product
        $cartSummary = $this->calculateCartSummary($cart);

        return view('cart.index', array_merge(['cart' => $cart], $cartSummary));
    }

    public function add(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $cart = $this->getUserCart();

        $cartItem = $cart->items()->where('product_id', $productId)->first();

        if ($cartItem) {
            // Verifica si hay suficiente stock para añadir otra unidad
            if ($cartItem->quantity < $product->stock) {
                $cartItem->quantity += 1;
                $cartItem->save();
                $message = 'Producto agregado al carrito!';
            } else {
                $message = 'No hay suficiente stock disponible!';
            }
        } else {
            if ($product->stock > 0) {
                $cart->items()->create([
                    'product_id' => $product->id,
                    'quantity' => 1,
                    'price' => $product->precio,
                ]);
                $message = 'Producto agregado al carrito!';
            } else {
                $message = 'No hay suficiente stock disponible!';
            }
        }

        $cart->save();

        $returnUrl = $request->input('return_url', route('cart.index'));
        
        return redirect($returnUrl)->with('success2', $message);
    }

    public function update(Request $request, $cartItemId)
    {
        $cartItem = CartItem::findOrFail($cartItemId);
        $quantity = $request->input('quantity');

        // Asegurarse de que la cantidad no supere el stock del producto
        if ($quantity > $cartItem->product->stock) {
            return redirect()->route('cart.index')->with('error', 'No hay suficiente stock disponible!');
        }

        $cartItem->quantity = $quantity;
        $cartItem->save();

        return redirect()->route('cart.index')->with('success2', 'Cantidad actualizada!');
    }

    public function remove($cartItemId)
    {
        $cartItem = CartItem::findOrFail($cartItemId);
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success2', 'Producto eliminado del carrito!');
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
}
