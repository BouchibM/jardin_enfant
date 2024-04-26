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
        Schema::create('employe_jardin', function (Blueprint $table) {
            $table->id();
            $table->string('employeId');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('proffession');
            $table->unsignedBigInteger('utilisateur_id');
            $table->unsignedBigInteger('jardin_id');
            $table->foreign('utilisateur_id')->references('id')->on('utilisateur');
            $table->foreign('jardin_id')->references('id')->on('jardin');
            $table->timestamps(); 
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employe_jardin');
    }
};
