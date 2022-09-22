<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order\Order;

class OrderController extends Controller {
    function getOrder($orderId) {
        $data = Order::where('id', $orderId)->first();
        return view('order', ['data' => $data]);
    }
}
