<?php

namespace Database\Seeders\items;

use App\Models\Item;
use Illuminate\Database\Seeder;

class SnackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::firstOrCreate([
            'name' => 'DIVERSEN'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 2.00,
        ]);
        Item::firstOrCreate([
            'name' => 'KIPFINGERS'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'FRIKANDEL'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'FRIKANDEL SPECIAAL'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'FRIKANDEL MAYO'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'FRIKANDEL CURRY'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'FRIKANDEL M+C'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KROKET'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KROKET MAYO'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KROKET MOSTERD'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'GOULASH KROKET'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KWEKKEBOOM KROKE'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'GROENTEN KROKET'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'SATE KROKET'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KALFS KROKET'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'GEHAKTBAL VET'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'GEHAKTBAL JUS'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'GEHAKTBAL.SPEC'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'GEHAKTBAL SPEC.M+C'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'VIANDEL'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'MEXICANO'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'BAMI SCHIJF'
        ], [
            'cooking_time' => 350,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'BAMI BLOK'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'spicy viandel'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'NASI BAL'
        ], [
            'cooking_time' => 330,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'NASI SCHIJF'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KAASSOUFLE'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'HAM-KAASSOUFLE'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'SJORTIE'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'BRAADWORST'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'BOKWORST'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KNAKWORST'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'BITTERBAL'
        ], [
            'cooking_time' => 400,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'SITOSTICK'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'HAPPYSTICK'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'ZIGEUNERSTICK'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'VISSTICK'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KIPKORN'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'SHOARMAROL'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'SMULROL'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'SATEROL'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'MACHO'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'LUCIFER'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KIPNUGGETS'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'RIBSTER'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'SHASLICK'
        ], [
            'cooking_time' => 200,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KIPBURGER'
        ], [
            'cooking_time' => 420,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'MULKYBURGER'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'SCHNITSEL'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'HALVE HAAN'
        ], [
            'cooking_time' => 600,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'VIETNAMESE LOEMP'
        ], [
            'cooking_time' => 500,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'LOEMPIA'
        ], [
            'cooking_time' => 500,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'VEG.LOEMPIA'
        ], [
            'cooking_time' => 400,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'GLUTENVRIJ FRIK'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KIPRUNNER'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'CRIZLY'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'LOEMPIDEL'
        ], [
            'cooking_time' => 400,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'VLAMPIJP'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'DIEK.5 STUK.'
        ], [
            'cooking_time' => 500,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'RAGOESTI'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'TWIJFELAAR'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'CHICKEN STRIPS'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'LIHANBOUTJE'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'PORTIE SATE'
        ], [
            'cooking_time' => 600,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'SLAATJE'
        ], [
            'cooking_time' => 0,
            'complexity' => 4,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'KROKIDEL XXL'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'XXL FRIK. SPEC'
        ], [
            'cooking_time' => 300,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'XXL FRIKANDEL'
        ], [
            'cooking_time' => 300,
            'complexity' => 1,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'UIRINGEN'
        ], [
            'cooking_time' => 240,
            'complexity' => 2,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'BONITA'
        ], [
            'cooking_time' => 300,
            'complexity' => 3,
            'price' => 1.60,
        ]);
        Item::firstOrCreate([
            'name' => 'RAUWKOST'
        ], [
            'cooking_time' => 0,
            'complexity' => 3,
            'price' => 1.60,
        ]);
    }
}
