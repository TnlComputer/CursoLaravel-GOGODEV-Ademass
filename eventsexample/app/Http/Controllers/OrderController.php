<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class OrderController extends Controller
{
    public function create()
    {
        // $order = Order::create([
        //     'user_id' => 10,
        //     'amount' => 25
        // ]);

        Artisan::call('make:order', ['user_id' => 75, 'amount' => 60]);
        // CreateOrderEvent::dispatch($order);
        return response()->json('Exito');
    }
}