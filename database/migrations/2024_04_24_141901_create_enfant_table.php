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
        Schema::create('enfant', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->date('Date_de_naissance');
            $table->string('Lieu');
            $table->string('Adresse_actuelle');
            $table->string('Groupe_sanguin');
            $table->unsignedBigInteger('jardin_id');
            $table->unsignedBigInteger('parent_id');

            $table->foreign('jardin_id')->references('id')->on('jardin');
            $table->foreign('parent_id')->references('id')->on('parent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enfant');
    }
};