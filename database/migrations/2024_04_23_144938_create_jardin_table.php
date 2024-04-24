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
        Schema::create('jardin', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('date_ouverture');
            $table->string('numero_agrement');
            $table->string('nature_juridique');
            $table->int('poste_aménagé');
            $table->string('adresse');
            $table->string('status');
            $table->unsignedBigInteger('employe_jardin_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('enfant_id');
            $table->foreign('employe_jardin_id')->references('id')->on('employe_jardin')->onDelete('cascade');
            $table->foreign('section_id')->references('id')->on('section')->onDelete('cascade');
            $table->foreign('enfant_id')->references('id')->on('enfant')->onDelete('cascade');
            $table->timestamps();

        });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jardins');
    }
};
