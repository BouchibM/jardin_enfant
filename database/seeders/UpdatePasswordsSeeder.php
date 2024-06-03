<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utilisateur;

class UpdatePasswordsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = Utilisateur::all();

        foreach ($users as $user) {
            $user->motdepass = bcrypt('hashed_password');
            $user->save();
        }
    }
}