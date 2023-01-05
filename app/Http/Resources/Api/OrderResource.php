<?php

namespace App\Http\Resources\Api;

use App\Services\ProcessOrderService;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'created_at' => $this->created_at->format('d-m H:i'),
            'items' => ProcessOrderService::process($this->resource)
        ];
    }
}
