<?php

namespace App\Services;

use App\Models\Order;

class ProcessOrderService
{
    static function process(Order $order)
    {
        $allItems = [];
        $longerCookingTime = [];
        $getFromTheBack = [];

        foreach ($order->items as $item) {
            $simple = $item->getSimple();
            $simple['amount'] = $item->pivot->amount;
            $allItems[] = $simple;

            if ($item->cooking_time > 300) {
                $longerCookingTime[] = $simple;
            }
            if($item->in_back){
                $getFromTheBack[] = $simple;
            }
        }

        return ['allItems' => $allItems, 'longerCookingTime' => $longerCookingTime, 'getFromTheBack' => $getFromTheBack];
    }
}
