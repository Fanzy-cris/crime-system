<?php

namespace Database\Seeders;

use App\Models\PoliceStation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliceStationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PoliceStation::create([
            'stationName' => 'Admin',
            'town_id' => 1,
        ]);
    }
}
