<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreOrderRequest;
use App\Http\Resources\Api\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return response()->json(OrderResource::collection(Order::all()->where('status', 'WAITING'))->response()->getData(true));
    }

    public function show(Order $order)
    {
        return $order;
    }

    public function store(StoreOrderRequest $request)
    {
        $validated = $request->validated();
        $statuses = config('enums.order_statuses');

        $order = Order::create([
            'status' => $statuses['WAITING'] //WAITING
        ]);

        foreach ($validated['items'] as $item) {
            for ($i = 0; $i < $item['amount']; $i++) {
                $order->items()->attach($item['id']);
            }
        }

        return response('order created', 200);
    }
}
