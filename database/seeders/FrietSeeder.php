<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class FrietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::firstOrCreate([
            'name' => 'Kinder friet'
        ], [
            'cooking_time' => 300,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'Normaal friet'
        ], [
            'cooking_time' => 300,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'Groot friet'
        ], [
            'cooking_time' => 300,
            'price' => 1.90
        ]);
    }
}
