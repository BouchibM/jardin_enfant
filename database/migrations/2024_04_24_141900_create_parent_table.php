<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
        public function up(): void
        {
            Schema::create('parent', function (Blueprint $table) {
                $table->id();
                $table->string('nom');
                $table->string('prenom');
                $table->date('Date_de_naissance');
                $table->string('tel_domicile');  // Change this
                $table->string('tel_post');  // Change this
                $table->string('tel_Portable');  // Change this
                $table->string('situation_familiale');
                $table->string('Lieu');
                $table->string('Adresse_actuelle');
                $table->string('Groupe_sanguin');
                $table->unsignedBigInteger('entreprise_id');
                $table->foreign('entreprise_id')->references('id')->on('entreprise');
                $table->unsignedBigInteger('utilisateur_id');
                $table->foreign('utilisateur_id')->references('id')->on('utilisateur');
                $table->timestamps();
        }); 
    }    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent');
    }
};
