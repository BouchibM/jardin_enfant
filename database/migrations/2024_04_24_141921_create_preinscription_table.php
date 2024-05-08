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
        Schema::create('preinscription', function (Blueprint $table) {
        $table->id();
        $table->date('Date');
        $table->string('status');
        $table->date('date_validation');
        $table->string('motif');
        $table->unsignedBigInteger('parent_id');
        $table->unsignedBigInteger('enfant_id');
        $table->unsignedBigInteger('gestionnaire_id');
        $table->foreign('parent_id')->references('id')->on('parent');
        $table->foreign('enfant_id')->references('id')->on('enfant');
        $table->foreign('gestionnaire_id')->references('id')->on('gestionnaire');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preinscription');
    }
};
