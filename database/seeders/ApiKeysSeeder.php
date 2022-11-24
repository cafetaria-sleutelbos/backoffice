<?php

namespace Database\Seeders;

use App\Models\ApiKeys;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ApiKeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApiKeys::firstOrCreate(
            ['name' => 'development_token'],
            ['token' => Str::random(60)]
        );
    }
}
