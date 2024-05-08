<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class RegionSeeder extends Seeder
{
    public function run()
    {
        $csv = Reader::createFromPath(database_path('seeders/data/region.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv->getRecords() as $record) {
            DB::table('region')->insert([
                'nom' => $record['nom'],
                'statue' => $record['statue'],
                'emplacement' => $record['emplacement'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
?>

