<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    public function run(): void
    {
        $csv = Reader::createFromPath(database_path('seeders/data/classe.csv'), 'r');
        $csv->setDelimiter(';'); // Définir le délimiteur à ;
        $csv->setHeaderOffset(0); // suppose que la première ligne est l'en-tête

        $records = $csv->getRecords();
        foreach ($records as $record) {
            DB::table('classe')->insert([
                'code' => $record['Code'],
                'nom' => $record['nom'] === 'null' ? null : $record['nom'],
                'capacite' => null,
                'jardin_id' => $record['id_jardin'],
                'section_id' => $record['id_section'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
?>
