<?php

namespace Database\Seeders;

use App\Models\Planet;
use App\Models\SolarSystem;
use Illuminate\Database\Seeder;

class SolarSystemSeeder extends Seeder
{
    public function run(): void
    {
        $system = SolarSystem::create(['name' => 'Zonnestelsel']);

        Planet::query()->update(['solar_system_id' => $system->id]);
    }
}
