<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Media;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FrietSeeder::class);
        $this->call(SnacksSeeder::class);

        if((env('APP_ENV') ?? 'local') == 'local'){
            $this->call(MockOrderSeeder::class);
        }
    }
}
