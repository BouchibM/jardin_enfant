<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    
    public function up()
    {
        Schema::create('inscription_enfant', function (Blueprint $table) {
            $table->id();
            $table->date('date_inscription');
            $table->string('status')->default('en attente');
            $table->string('observation')->nullable();
            $table->unsignedBigInteger('enfant_id')->nullable();
            $table->unsignedBigInteger('classe_id')->nullable();
            $table->timestamps();
    
            $table->foreign('enfant_id')->references('id')->on('enfant');
            $table->foreign('classe_id')->references('id')->on('classe');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription_enfant');
    }
};
