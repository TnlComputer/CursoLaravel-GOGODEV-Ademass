<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        $order = Order::create([
            'user_id' => 10,
            'amount' => 25
        ]);

        // CreateOrderEvent::dispatch($order);
        return response()->json('Exito');
    }
}