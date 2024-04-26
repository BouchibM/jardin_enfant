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
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->unsignedBigInteger('parent_id'); 
            $table->foreign('parent_id')->references('id')->on('parent')->onDelete('cascade'); 
            $table->unsignedBigInteger('psychologue_id'); 
            $table->foreign('psychologue_id')->references('id')->on('psychologue')->onDelete('cascade'); 
            $table->unsignedBigInteger('preinscription_id'); 
            $table->foreign('preinscription_id')->references('id')->on('preinscription')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question');
    }
};
