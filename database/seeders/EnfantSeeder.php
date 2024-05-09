<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnfantSeeder extends Seeder
{
    public function run()
    {
        DB::table('enfant')->insert([
            'nom' => 'ABDELLAH EL HADJ',
            'prenom' => 'Lyna',
            'date_de_naissance' =>'2019/10/26',
            'lieu' => null,
            'adresse_actuelle' => null,
            'groupe_sanguin' => null,
            'parent_id' => 1,
            'created_at' => Carbon::now(),
            'extrait_naissance_path' => null,
            'photo_path' => null,
            'certificat_vaccination_path' => null,
            'certificat_sante_path' => null,
            'autorisation_medical_path' => null,
            'autorisation_sortie_path' => null,
            'classe_id' => 3
        ]);


        DB::table('enfant')->insert([
            'nom' => 'ABDELLALI ',
            'prenom' => 'Anes',
            'date_de_naissance' =>'2019/01/13',
            'lieu' => null,
            'adresse_actuelle' => null,
            'groupe_sanguin' => null,
            'parent_id' => 2,
            'created_at' => Carbon::now(),
            'extrait_naissance_path' => null,
            'photo_path' => null,
            'certificat_vaccination_path' => null,
            'certificat_sante_path' => null,
            'autorisation_medical_path' => null,
            'autorisation_sortie_path' => null,
            'classe_id' => 2
        ]);
    }
}
?>
