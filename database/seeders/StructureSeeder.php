<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use League\Csv\Reader;
use Illuminate\Support\Facades\DB;

class StructureSeeder extends Seeder
{
    public function run()
    {
        $csv = Reader::createFromPath(database_path('seeders/data/structures.csv'), 'r');
        $csv->setHeaderOffset(0); // suppose que la première ligne est l'en-tête

        $records = $csv->getRecords();
        foreach ($records as $record) {
            DB::table('structure')->insert([
                'code' => $record['code'],
                'nom' => $record['nom'],
                'str_rattachement' => null, // Assurez-vous de modifier cette ligne selon votre logique
                'statue' => "en fonction", // Assurez-vous de modifier cette ligne selon votre logique
                'id_entreprise' => 1 ,// Assurez-vous de modifier cette ligne selon votre logique
                'created_at' => now(),
            ]);
        }
    }
}
?>
