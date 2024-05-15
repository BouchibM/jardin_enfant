<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fonction', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('nom');
            $table->integer('echelle');
            $table->string('structure_code'); // Colonne pour la clé étrangère
            $table->foreign('structure_code')->references('code')->on('structure'); // Définition de la relation de clé étrangère
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fonction');
    }
};
