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
        Schema::create('groupe_sousgroupe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('groupe_id'); 
            $table->foreign('groupe_id')->references('id')->on('groupe')->onDelete('cascade'); 
            $table->unsignedBigInteger('sous_groupe_id'); 
            $table->foreign('sous_groupe_id')->references('id')->on('sous_groupe')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupe_sousgroupe');
    }
};
