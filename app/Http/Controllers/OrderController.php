<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function confirmation($orderId)
    {
        $order = Order::with('items.product')->findOrFail($orderId);
        return view('confirmation', compact('order'));
    }
}

