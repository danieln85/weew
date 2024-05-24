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
        return view('cart.index', compact('cart'));
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
        $cartItem->quantity = $request->quantity;
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
}
