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
        Schema::create('medecin_generale', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_jardin_id'); 
            $table->foreign('employe_jardin_id')->references('id')->on('employe_jardin')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medecin_generale');
    }
};
