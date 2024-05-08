<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyParentTableToAllowNulls extends Migration
{
    public function up()
    {
        Schema::table('parent', function (Blueprint $table) {
            // Rendre les champs existants nullable
            $table->string('nom')->nullable()->change();
            $table->string('prenom')->nullable()->change();
            $table->date('Date_de_naissance')->nullable()->change();
            $table->integer('tel_domicile')->nullable()->change();
            $table->integer('tel_post')->nullable()->change();
            $table->integer('tel_Portable')->nullable()->change();
            $table->string('situation_familiale')->nullable()->change();
            $table->string('Lieu')->nullable()->change();
            $table->string('Adresse_actuelle')->nullable()->change();
            $table->string('Groupe_sanguin')->nullable()->change();

            // Modifier les clés étrangères pour qu'elles soient nullable
            $table->unsignedBigInteger('entreprise_id')->nullable()->change();
            $table->unsignedBigInteger('utilisateur_id')->nullable()->change();

            // Si les clés étrangères doivent être supprimées et recréées, le faire ici
            $table->dropForeign(['entreprise_id']);
            $table->dropForeign(['utilisateur_id']);
            $table->foreign('entreprise_id')->references('id')->on('entreprise')->onDelete('set null');
            $table->foreign('utilisateur_id')->references('id')->on('utilisateur')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('parent', function (Blueprint $table) {
            // Ajouter ici le code pour inverser les modifications si nécessaire
        });
    }
}
