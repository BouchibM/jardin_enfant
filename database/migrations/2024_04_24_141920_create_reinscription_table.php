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
        Schema::create('reinscription', function (Blueprint $table) {
            $table->id('id_reeins');
            $table->string('montant');
            $table->integer('num_trcpc');
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
        Schema::dropIfExists('reinscription');
    }
};
