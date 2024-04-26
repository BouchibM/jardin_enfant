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
        Schema::create('visite_spontanee', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visite_id');
            $table->foreign('visite_id')->references('id')->on('visite')->onDelete('cascade');
            $table->unsignedBigInteger('medecin_generale_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visite_spontanee');
    }
};
