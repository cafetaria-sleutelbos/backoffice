<?php

namespace Database\Seeders\items;

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
        //NORMAL
        Item::firstOrCreate([
            'name' => 'DIKKE FRIET'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRANSE FRIET'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET MAYO'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET CURRY'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET MAYO+UI'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET TOM.KETCH'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET SPECIAAL'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET SATE'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET STOOFVLEES'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIETZIGEUNERSAUS'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET KNOFL'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET JOPPIE'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET PICCA.'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'FRIET OORLOG'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);

        //BIG
        Item::firstOrCreate([
            'name' => 'GR.FRIETMAYO'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.FRIETCURRY'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.FRIET TOMATK'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.FRIETSPECIAAL'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.FRIET SATE'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.FRIET STOOFVLEES'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR FR ZIG/JOPPIE'
        ], [
            'cooking_time' => 300,
            'complexity' => 4,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.FRIET MAYO+UI'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.FRIET MAYO +C'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR FR PICC'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.FRIET OORLOG'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);

        //SUPER
        Item::firstOrCreate([
            'name' => 'SUPER.ZONDER'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.MAYO'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.MAYO+CURRY'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.MAYO/CURRY'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.CURRY/TOMKETCH'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.SPECIAAL'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.SATESAUS'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.STOOFVLEES'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.ZIG.SAUS'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.KNOFLOOK'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.JOPPIE'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.PICCA'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'SUPER.OORLOG'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);

        //BIG SUPER
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE.ZOND'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE.MAYO/CURRY'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE.MAYO+CURRY'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE TOMA'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE SPEC'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE SATE'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE STOO'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE ZIG.'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE KNOF'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE JOPP'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE PICC'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'GR.SUPERTJE OORL'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);

        //SMALL
        Item::firstOrCreate([
            'name' => 'KINDERFR.M.OF.C'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'KINDERFR.SPEC/SATE'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'KINDERFRIET STOO'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.90
        ]);
        Item::firstOrCreate([
            'name' => 'KINDERBOX'
        ], [
            'cooking_time' => 300,
            'complexity' => 4,
            'price' => 1.90
        ]);
    }
}
