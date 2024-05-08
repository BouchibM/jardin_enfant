<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use League\Csv\Statement;

class JardinSeeder extends Seeder
{
    public function run()
    {
        // Assurez-vous d'utiliser le point-virgule comme séparateur pour ce fichier
        $csv = Reader::createFromPath(database_path('seeders/data/jardins.csv'), 'r');
        $csv->setDelimiter(';'); // Définir le délimiteur sur point-virgule pour ce fichier
        $csv->setHeaderOffset(0);

        // En utilisant Statement pour construire une requête pour obtenir les enregistrements
        $stmt = Statement::create();

        foreach ($stmt->process($csv) as $record) {
            // Trouver l'ID de la région correspondante
            // Assurez-vous que 'REGION' correspond exactement à l'en-tête de la colonne dans le fichier CSV
            $region = DB::table('region')->where('nom', $record['REGION'])->first();

            if ($region) {
                DB::table('jardin')->insert([
                    'nom' => $record['nom'],
                    'date_ouverture' => $record['date_ouverture'], // Pas besoin de modifier si déjà formaté ou nul
                    'adresse' => $record['adresse'],
                    'numero_agrement' => $record['num_agrement'], // Assurez-vous que le nom de la colonne dans le CSV est 'num_agrement'
                    'nature_juridique' => $record['nature_juridique'],
                    'poste_amenage' => $record['poste_amenage'], // Assurez-vous que le nom de la colonne dans le CSV est corrigé
                    'capacite' => $record['capacite'], // Assurez-vous que le nom de la colonne dans le CSV est 'capacite'
                    'status' => $record['status'], // Assurez-vous que le nom de la colonne dans le CSV est 'status'
                    'region_id' => $region->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
?>