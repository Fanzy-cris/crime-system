<?php

namespace Database\Seeders;

use App\Models\Town;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TownsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Liste des villes du Cameroun
    $towns = [
        "Adamaoua",
        "Ngaoundéré",
        "Akonolinga",
        "Tibati",
        "Meiganga",
        "Bélabo",
        "Tignère",
        "Yaoundé",
        "Mbalmayo",
        "Ebolowa",
        "Sangmélima",
        "Ambam",
        "Zoétélé",
        "Okola",
        "Sa'a",
        "Bertoua",
        "Batouri",
        "Yokadouma",
        "Lomie",
        "Abong-Mbang",
        "Doumé",
        "Bétaré-Oya",
        "Maroua",
        "Mora",
        "Kousséri",
        "Yagoua",
        "Guidiguis",
        "Waza",
        "Makary",
        "Douala",
        "Edéa",
        "Limbé",
        "Kribi",
        "Manoka",
        "Nkongsamba",
        "Yabassi",
        "Garoua",
        "Pitoa",
        "Tcholliré",
        "Mayo-Oulo",
        "Binder",
        "Poli",
        "Bamenda",
        "Kumbo",
        "Wum",
        "Nkambe",
        "Jakiri",
        "Mbengwi",
        "Ndop",
        "Bafoussam",
        "Dschang",
        "Mbouda",
        "Bafang",
        "Foumban",
        "Bangangté",
        "Kribi",
        "Akonolinga",
        "Mvangane",
        "Bipindi",
        "Lolodorf",
        "Mengong",
        "Buea",
        "Limbé",
        "Kumba",
        "Mutengene",
        "Tiko",
        "Ekondo-Titi",
        "Fontem", // Ajoutez toutes les villes du Cameroun
    ];

    foreach ($towns as $townName) {
            Town::create([
                'townName' => $townName,
            ]);
        }
    }
}
