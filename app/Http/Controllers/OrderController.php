<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::all();
        return view('orders.index')->with(['orders' => $orders]);
    }

    public function show(Request $request, Order $order)
    {
        return view('orders.show')->with(['order' => $order]);
    }

    public function create()
    {
        return 'create';
    }
    public function store()
    {
        return 'store';
    }
    public function edit()
    {
        return 'edit';
    }
    public function update()
    {
        return 'update';
    }
    public function destroy()
    {
        return 'destroy';
    }
}
