<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use League\Csv\Reader;
use Illuminate\Support\Facades\DB;

class ParentSeeder extends Seeder
{

    public function run(): void
    {
        $csv = Reader::createFromPath(database_path('seeders/data/parent.csv'), 'r');
        $csv->setDelimiter(';'); // Définir le délimiteur sur point-virgule pour ce fichier
        $csv->setHeaderOffset(0); // suppose que la première ligne est l'en-tête
        

        $records = $csv->getRecords();
        foreach ($records as $record) {
            DB::table('parent')->insert([
                'nom' => null, // ou une valeur par défaut
                'prenom' => null, // ou une valeur par défaut
                'Date_de_naissance' => null, // ou une valeur par défaut
                'tel_domicile' => null, // ou une valeur par défaut
                'tel_post' => null, // ou une valeur par défaut
                'tel_Portable' => $record['tel_Portable'],
                'situation_familiale' => null, // ou une valeur par défaut
                'Lieu' => null, // ou une valeur par défaut
                'Adresse_actuelle' => null, // ou une valeur par défaut
                'Groupe_sanguin' => null, // ou une valeur par défaut
                'entreprise_id' => null, // ou une valeur par défaut
                'utilisateur_id' => null, // ou une valeur par défaut
                'created_at' => now(),
                'nom_complet' => $record['nom_complet'],

            ]);
        }
    }
}
?>