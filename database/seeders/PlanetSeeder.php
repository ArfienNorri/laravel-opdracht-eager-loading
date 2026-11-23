<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('planets')->insert([
            ['name' => 'Mercurius', 'description' => 'De kleinste planeet.'],
            ['name' => 'Venus', 'description' => 'De heetste planeet.'],
            ['name' => 'Aarde', 'description' => 'Onze thuisplaneet.'],
            ['name' => 'Mars', 'description' => 'De rode planeet.'],
            ['name' => 'Jupiter', 'description' => 'De grootste planeet.'],
            ['name' => 'Saturnus', 'description' => 'De planeet met ringen.'],
            ['name' => 'Uranus', 'description' => 'Een ijsreus die op zijn zij draait.'],
            ['name' => 'Neptunus', 'description' => 'De verste planeet.'],
        ]);
    }
}
