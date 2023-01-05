<?php

namespace Database\Seeders\items;

use App\Models\Item;
use Illuminate\Database\Seeder;

class BreadSeeder extends Seeder
{
    public function run()
    {
        Item::firstOrCreate([
            'name' => 'BR.EI'
        ], [
            'cooking_time' => 0,
            'complexity' => 6,
            'price' => 1.90,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'BROODJE KAAS'
        ], [
            'cooking_time' => 0,
            'complexity' => 3,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'BR.FRIKANDEL'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'BROODJE KROKET'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'BROODJE GOULASH'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'BROODJE KNAKW.'
        ], [
            'cooking_time' => 250,
            'complexity' => 3,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'BROODJE SATEKR.'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'BROODJE GEH.BAL'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'BROODJE GEZOND'
        ], [
            'cooking_time' => 0,
            'complexity' => 7,
            'price' => 1.90,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'BROODJE SHOARMA'
        ], [
            'cooking_time' => 250,
            'complexity' => 4,
            'price' => 1.90,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'BROODJE SJORTIE'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'BROODJE'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
    }
}
