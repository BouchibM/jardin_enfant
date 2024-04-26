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
        Schema::create('examen_dentaire', function (Blueprint $table) {
            $table->id();
            $table->string('Observation');
            $table->unsignedBigInteger('visite_id');
            $table->foreign('visite_id')->references('id')->on('visite')->onDelete('cascade');
            $table->unsignedBigInteger('dentist_id');
            $table->foreign('dentist_id')->references('id')->on('dentist')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen_dentaire');
    }
};
