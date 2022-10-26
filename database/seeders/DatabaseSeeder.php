<?php

namespace Database\Seeders;

use App\Models\User;
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
            User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@admin.admin'
            ]);
            $this->call(MockOrderSeeder::class);
        }
    }
}
