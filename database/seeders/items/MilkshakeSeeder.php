<?php

namespace Database\Seeders\items;

use App\Models\Item;
use Illuminate\Database\Seeder;

class MilkshakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::firstOrCreate([
            'name' => 'KL.AARDBEI'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'KL.BANAAN'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'KL.VANILLE'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'KL.CHOC.'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'MED.AARDBEI'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'MED.BANAAN'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'MED.VANILLE'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'MED.CHOC.'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.AARDBEI'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.BANAAN'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.VANILLE'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.CHOC.'
        ], [
             'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90
        ]);
    }
}
