<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeColumnsNullableInParentTable extends Migration
{
    public function up()
    {
        Schema::table('parent', function (Blueprint $table) {
            $table->string('nom')->nullable()->change();
            $table->string('prenom')->nullable()->change();
            $table->date('Date_de_naissance')->nullable()->change();
            $table->string('tel_domicile')->nullable()->change();
            $table->string('tel_post')->nullable()->change();
            $table->string('situation_familiale')->nullable()->change();
            $table->string('Lieu')->nullable()->change();
            $table->string('Adresse_actuelle')->nullable()->change();
            $table->string('Groupe_sanguin')->nullable()->change();
            $table->unsignedBigInteger('entreprise_id')->nullable()->change();
            $table->unsignedBigInteger('utilisateur_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('parent', function (Blueprint $table) {
            // Vous pouvez inverser les changements ici si nécessaire
        });
    }
}
