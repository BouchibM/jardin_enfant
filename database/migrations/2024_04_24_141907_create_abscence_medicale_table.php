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
        Schema::create('abscence_medical', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('motif');
            $table->unsignedBigInteger('visite_spontanee_id'); // Add this line
        $table->foreign('visite_spontanee_id')->references('id')->on('visite_spontanee')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abscence_medical');
    }
};
