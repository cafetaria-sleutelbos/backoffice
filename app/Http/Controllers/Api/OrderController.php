<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UpdateOrderRequest;
use App\Http\Resources\Api\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status') ?? 'WAITING';

        $op = '=';
        if($status != 'WAITING'){
            $op = '!=';
        }
        return response()->json(OrderResource::collection(Order::all()->where('status', $op, 'WAITING'))->response()->getData(true));
    }

    public function show(Order $order)
    {
        return $order;
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        return $order->update([
            'status' => $request
        ]);
    }

    public function finishOrder(Order $order){
        if($order->status != 'WAITING'){
            return $order->update([
                'status' => 'WAITING'
            ]);
        }

        return $order->update([
            'status' => 'IN_PROGRESS'
        ]);
    }
}
