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
        Schema::create('detaille_dossier', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('chemin'); // This will store the path to the file or photo
            $table->unsignedBigInteger('reinscription_id');
            $table->unsignedBigInteger('preinscription_id');
            $table->foreign('reinscription_id')->references('id')->on('reinscription')->onDelete('cascade');
            $table->foreign('preinscription_id')->references('id')->on('preinscription')->onDelete('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detaille_dossier');
    }
};
