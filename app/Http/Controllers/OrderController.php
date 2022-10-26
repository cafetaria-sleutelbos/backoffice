<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteOrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
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
    public function store(StoreOrderRequest $request)
    {
        $validated = $request->validated();
        $order = Order::create([
            'status' => $validated['status']
        ]);
        return redirect('/orders/' . $order->id);
    }
    public function edit()
    {
        return 'edit';
    }
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $validated = $request->validated();
        $order->update([
            'status' => $validated['status']
        ]);

        return redirect('/orders/' . $order->id);
    }
    public function destroy(DeleteOrderRequest $request, Order $order)
    {
        $order->items()->detach();
        $order->delete();

        return redirect('/orders');
    }
}
