<?php

namespace Database\Seeders\items;

use App\Models\Item;
use Illuminate\Database\Seeder;

class PlatterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::firstOrCreate([
            'name' => 'BAMISCHOTEL'
        ], [
            'cooking_time' => 600,
            'complexity' => 7,
            'price' => 2.00,
        ]);
        Item::firstOrCreate([
            'name' => 'NASISCHOTEL'
        ], [
            'cooking_time' => 600,
            'complexity' => 7,
            'price' => 2.00,
        ]);
        Item::firstOrCreate([
            'name' => 'SCHNITZELSCHOTEL'
        ], [
            'cooking_time' => 300,
            'complexity' => 5,
            'price' => 2.00,
        ]);
        Item::firstOrCreate([
            'name' => 'HALVE HAAN SCHOTEL'
        ], [
            'cooking_time' => 600,
            'complexity' => 4,
            'price' => 2.00,
        ]);
        Item::firstOrCreate([
            'name' => 'HAMBURGER STEAK'
        ], [
            'cooking_time' => 600,
            'complexity' => 4,
            'price' => 2.00,
        ]);
        Item::firstOrCreate([
            'name' => 'SATE SCHOTEL'
        ], [
            'cooking_time' => 600,
            'complexity' => 4,
            'price' => 2.00,
        ]);
        Item::firstOrCreate([
            'name' => 'SHOARMA SCHOTEL'
        ], [
            'cooking_time' => 300,
            'complexity' => 4,
            'price' => 2.00,
        ]);
        Item::firstOrCreate([
            'name' => 'EI'
        ], [
            'cooking_time' => 0,
            'complexity' => 2,
            'price' => 1.00,
        ]);
    }
}
