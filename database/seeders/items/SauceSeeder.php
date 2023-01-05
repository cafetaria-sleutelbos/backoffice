<?php

namespace Database\Seeders\items;

use App\Models\Item;
use Illuminate\Database\Seeder;

class SauceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::firstOrCreate([
            'name' => 'KLEINE MAYO'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KLEINE CURRY'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KLEINE STOOFVL.'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KLEINE SATE'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KLEINE JOPPIE'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KLEINE CHILLI/PICCA'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KLEINE ZIG.'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KLEINE SPECIAAL'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'GROTE MAYO'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'GROTE CURRY'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'GROTE STOOFVL'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'GROTE SATE'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'GROTE JOPPIE'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'GROTE CHILLI OF PICCA'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'GROTE ZIG.'
        ], [
            'cooking_time' => 40,
            'complexity' => 3,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'GROTE SPECIAAL'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'ZAKJE UITJES'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KLEINE KNOFLOOKSAUS'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'GROTE KNOFLOOKSAUS'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KLEINE CHAMP.SAUS'
        ], [
            'cooking_time' => 60,
            'complexity' => 2,
            'price' => 1.60,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'GROTE CHAMP.SAUS'
        ], [
            'cooking_time' => 60,
            'complexity' => 2,
            'price' => 1.60,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'APPELMOES'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);

        //EXTRA
        Item::firstOrCreate([
            'name' => 'MAYO'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'CURRY'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'SATESAUS'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'STOOFVLEES'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'JOPPIESAUS'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'SPECIAAL'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'CHILLISAUS'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'KNOFLOOKSAUS'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
        Item::firstOrCreate([
            'name' => 'CHAMPIGNONSAUS'
        ], [
            'cooking_time' => 60,
            'complexity' => 2,
            'price' => 1.60,
            'in_back' => 1,
        ]);
        Item::firstOrCreate([
            'name' => 'TOMATEN KETCHUP'
        ], [
            'cooking_time' => 0,
            'complexity' => 1,
            'price' => 1.60,
            'in_back' => 0,
        ]);
    }
}
