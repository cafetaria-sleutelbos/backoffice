<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        return 'api.orders.index';
    }

    public function show(Order $order)
    {
        return 'api.orders.show';
    }
}
