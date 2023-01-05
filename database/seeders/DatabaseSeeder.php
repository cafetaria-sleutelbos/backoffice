<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemSeeder::class);

        User::firstOrCreate([
            'email' => 'admin@admin.admin'
        ], [
            'name' => 'admin',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        if ((env('APP_ENV') ?? 'local') == 'local') {
//            User::factory()->create([
//                'name' => 'admin',
//                'email' => 'admin@admin.admin'
//            ]);
//            $this->call(MockOrderSeeder::class);
//            $this->call(ApiKeysSeeder::class);
        }
    }
}
