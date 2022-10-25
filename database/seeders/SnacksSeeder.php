<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class SnacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::firstOrCreate([
            'name' => 'Frikandel'
        ], [
            'cooking_time' => 300, // 5 mins
            'price' => 1.90,
        ]);

        Item::firstOrCreate([
            'name' => 'Kroket'
        ], [
            'cooking_time' => 300, // 5 mins
            'price' => 1.90,
        ]);
        Item::firstOrCreate([
            'name' => 'Viandel'
        ], [
            'cooking_time' => 300, // 5 mins
            'price' => 2.00,
        ]);
    }
}
