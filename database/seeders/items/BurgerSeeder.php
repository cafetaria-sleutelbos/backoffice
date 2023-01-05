<?php

namespace Database\Seeders\items;

use App\Models\Item;
use Illuminate\Database\Seeder;

class BurgerSeeder extends Seeder
{
    public function run()
    {
        Item::firstOrCreate([
            'name' => 'HAMBURGER GEWOON'
        ], [
            'cooking_time' => 600,
            'complexity' => 3,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'HAMBURGER SPECIAAL'
        ], [
            'cooking_time' => 600,
            'complexity' => 4,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'HAMBURGER ZIGEUN'
        ], [
            'cooking_time' => 600,
            'complexity' => 6,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'HAMBURGER HAWAII'
        ], [
            'cooking_time' => 600,
            'complexity' => 5,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'HAMBURGER POLLEK'
        ], [
            'cooking_time' => 600,
            'complexity' => 5,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'HAMBURGER DALLAS'
        ], [
            'cooking_time' => 600,
            'complexity' => 6,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'HAMBURGER NATUREL'
        ], [
            'cooking_time' => 600,
            'complexity' => 2,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KIPBURGER GEWOON'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.90,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'KIPBURGER SPECIAAL'
        ], [
            'cooking_time' => 300,
            'complexity' => 4,
            'price' => 1.90,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'CHEES BURGER'
        ], [
            'cooking_time' => 600,
            'complexity' => 4,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'BR.MULKYBURG.GEWOON'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.90,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'BR.MULKYBURG.SPECIAAL'
        ], [
            'cooking_time' => 300,
            'complexity' => 4,
            'price' => 1.90,
            'in_back' => 1,
        ]);
    }
}
