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
        Schema::create('anonce', function (Blueprint $table) {
            $table->id();
            $table->string('Type');
            $table->date('datedebut');
            $table->date('datefin');
            $table->date('date_creation');
            $table->unsignedBigInteger('gestionnaire_id'); 
            $table->foreign('gestionnaire_id')->references('id')->on('gestionnaire')->onDelete('cascade'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anonce');
    }
};
