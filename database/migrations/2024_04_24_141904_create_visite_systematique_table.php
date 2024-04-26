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
        Schema::create('visite_systematique', function (Blueprint $table) {
            $table->id();
            $table->string('Poids');
            $table->string('Taille');
            $table->string('Mentions');
            $table->string('Orientation_specialisees');
            $table->unsignedBigInteger('visite_id');
            $table->foreign('visite_id')->references('id')->on('visite')->onDelete('cascade');
            $table->unsignedBigInteger('medecin_generale_id');
            $table->foreign('medecin_generale_id')->references('id')->on('medecin_generale')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visite_systematique');
    }
};
