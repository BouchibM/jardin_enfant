<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrepriseSeeder extends Seeder
{
    public function run()
    {
        $entreprises = [
            'Sonatrach',
            'Naftal',
            'Naftec',
            'ENAFOR',
            'ENSP',
            'Hyproc SC',
            'ENGTP',
            'Tassili Airlines',
            'Sonatrach Petroleum Corporation (SPC)',
            'Sonatrach Raffinerie d\'Italie (SRI)',
            'ASAL',
            'Groupement Berkine',
            'Alnaft'
        ];

        foreach ($entreprises as $nom) {
            DB::table('entreprise')->insert([
                'nom' => $nom,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
?>
