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
            $table->string('contenu'); // This will store the path to the file or photo
            $table->unsignedBigInteger('inscription_id');
            $table->foreign('inscription_id')->references('id')->on('inscription')->onDelete('cascade');
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
