<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('enfant', function (Blueprint $table) {
            // Modifier le type des colonnes existantes
            $table->binary('extrait_naissance_path')->nullable()->change();
            $table->binary('photo_path')->nullable()->change();
            $table->binary('certificat_vaccination_path')->nullable()->change();
            $table->binary('certificat_sante_path')->nullable()->change();
            $table->binary('autorisation_medical_path')->nullable()->change();
            $table->binary('autorisation_sortie_path')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('enfant', function (Blueprint $table) {
            // Revenir au type original si nécessaire
            $table->string('extrait_naissance_path')->nullable()->change();
            $table->string('photo_path')->nullable()->change();
            $table->string('certificat_vaccination_path')->nullable()->change();
            $table->string('certificat_sante_path')->nullable()->change();
            $table->string('autorisation_medical_path')->nullable()->change();
            $table->string('autorisation_sortie_path')->nullable()->change();
        });
    }
};
