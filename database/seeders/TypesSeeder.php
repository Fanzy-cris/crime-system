<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Type::create([
            'id' => 1,
            'nameType' => 'Admin',
        ]);
        
        Type::create([
            'nameType' => 'Chief of Police',
        ]);

        Type::create([
            'nameType' => 'Deputy Chief of Police',
        ]);

        Type::create([
            'nameType' => 'Captain',
        ]);

        Type::create([
            'nameType' => 'Lieutenant',
        ]);

        Type::create([
            'nameType' => 'Sergeant',
        ]);

        Type::create([
            'nameType' => 'Detective',
        ]);

        Type::create([
            'nameType' => 'Officer',
        ]);
    }
}
