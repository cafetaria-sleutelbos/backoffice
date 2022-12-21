<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'created_at' => $this->created_at->format('d-m H:i'),
            'items' => DB::table("items")
                ->leftJoin("item_order", function ($join) {
                    $join->on("items.id", "=", "item_order.item_id");
                })
                ->leftJoin("orders", function ($join) {
                    $join->on("item_order.order_id", "=", "orders.id");
                })
                ->select(DB::raw("DISTINCT (COUNT(item_order.item_id)) as amount, items.name, item_order.order_id as pivot_order_id, item_order.item_id as pivot_item_id"))
                ->where("item_order.order_id", "=", $this->id)
                ->whereNull("items.deleted_at")
                ->groupBy('item_order.id')
                ->get()
        ];
    }
}
