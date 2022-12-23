<?php

namespace Database\Seeders;

use Database\Seeders\items\BreadSeeder;
use Database\Seeders\items\BurgerSeeder;
use Database\Seeders\items\DrinkSeeder;
use Database\Seeders\items\FrietSeeder;
use Database\Seeders\items\IceCreamSeeder;
use Database\Seeders\items\MilkshakeSeeder;
use Database\Seeders\items\PlatterSeeder;
use Database\Seeders\items\SauceSeeder;
use Database\Seeders\items\SnackSeeder;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //###COMPLEXITY
        //for each added action, complexity increases with the number behind action (e.g. br.ei => 5)
        //DEFAULT => 1

        //###GENERAL
        //GET FROM THE BACK  => 1
        //THAW => 2
        //BOILED EGG => 3
        //INSTANT BAG UP => 1
        //CUT SNACK => 1
        //DROP IN WATER (KNAKWORST BOKWORST) => 1
        //ADD SALAD => 2
        //ADD ZIG SAUCE => 2

        //###HOTPLATE
        //FRY EGG => 2
        //DROP ON HOTPLATE => 1
        //PREPARE BREAD => 1
        //ADD ONIONS/MUSHROOMS HOTPLATE => 1

        //###FRIES
        //ADD SAUCE => 1
        //

        $this->call(BreadSeeder::class);
        $this->call(BurgerSeeder::class);
        $this->call(DrinkSeeder::class);
        $this->call(FrietSeeder::class);
        $this->call(IceCreamSeeder::class);
        $this->call(MilkshakeSeeder::class);
        $this->call(PlatterSeeder::class);
        $this->call(SauceSeeder::class);
        $this->call(SnackSeeder::class);
    }
}
