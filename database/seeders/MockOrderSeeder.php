<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Database\Seeder;

class MockOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++){
            $items = Item::inRandomOrder()->limit(range(2, 6))->first();
            $order = Order::factory()->create();
            $items->orders()->attach($order);
        }
    }
}
