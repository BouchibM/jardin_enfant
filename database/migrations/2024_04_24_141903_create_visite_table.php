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
        Schema::create('visite', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('type_visit');
            $table->unsignedBigInteger('enfant_id'); 
            $table->foreign('enfant_id')->references('id')->on('enfant')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visite');
    }
};
