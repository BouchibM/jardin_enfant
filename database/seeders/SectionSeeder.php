<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    public function run(): void
    {
        $csv = Reader::createFromPath(database_path('seeders/data/section.csv'), 'r');
        $csv->setDelimiter(';'); // Définir le délimiteur à ;
        $csv->setHeaderOffset(0); // suppose que la première ligne est l'en-tête

        $records = $csv->getRecords();
        foreach ($records as $record) {
            DB::table('section')->insert([
                'nom' => $record['nom'],
                'capacite' => $record['capacite'] === 'null' ? null : $record['capacite'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
?>
