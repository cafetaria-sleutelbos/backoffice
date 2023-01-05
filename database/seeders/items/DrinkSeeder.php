<?php

namespace Database\Seeders\items;

use App\Models\Item;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::firstOrCreate([
            'name' => 'COLA'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'COLA ZERO'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'FANTA'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'SPRITE'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'CHERRY COKE'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'SPA BLAUW'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'CHOCOMEL'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'FRISTI'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'DR.PEPPER'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'DR.FOOTS'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'FANTA CASSIS'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'APPELSAP'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'ICE TEA'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'RED BULL'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'AA DRINK'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'ICE TEA GREEN'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KOFFIE'
        ], [
            'cooking_time' => 60,
            'complexity' => 6,
            'price' => 1.90,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'THEE'
        ], [
            'cooking_time' => 60,
            'complexity' => 6,
            'price' => 1.90,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'KINDERCOLA'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'CAPRISONNE'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'SPA ROOD'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'BLIKJE BIER'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.90,
            'in_back' => 0,
        ]);
    }
}
