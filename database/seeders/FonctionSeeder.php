<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chemin vers le fichier CSV
        $path = database_path('seeders/data/fonctions.csv');

        // Ouvrir le fichier CSV
        $file = fopen($path, 'r');

        // Sauter l'en-tête du CSV
        fgetcsv($file);

        // Lire chaque ligne du CSV
        while ($row = fgetcsv($file)) {
            // Sélectionner un code de structure aléatoire
            $structureCode = DB::table('structure')->inRandomOrder()->first()->code;

            // Préparer les données à insérer
            $data = [
                'code' => $row[0],
                'nom' => $row[1],
                'echelle' => $row[2],
                'structure_code' => $structureCode,
            ];

            // Insérer les données dans la base de données
            DB::table('fonction')->insert($data);
        }

        // Fermer le fichier CSV
        fclose($file);
    }
}
