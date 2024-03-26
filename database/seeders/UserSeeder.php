<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\PoliceStation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userType = Type::where('nameType', 'Admin')->first(); // Assuming a type "Administrateur" exists
        $userStation = PoliceStation::where('stationName', 'Admin')->first();
        User::create([
            'Type_id' => $userType->id, // Link to the selected type
            'police_station_id' => $userStation->id, // Set to null if not applicable
            'nameUser' => 'admin',
            'surNameUser' => 'admin',
            'badgeNumUser' => 12345, // Adjust badge number accordingly
            'phoneUser' => '695432100', // Adjust phone number format for your region
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), // Replace with a strong password
            'remember_token' => Str::random(10), // Optional: Generate a remember token
        ]);
    }
}
