<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $statuses = config('enums.order_statuses');
        return [
            'status' =>  Arr::random($statuses, 1)[0],
        ];
    }
}
