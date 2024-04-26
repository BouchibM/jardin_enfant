<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('structure', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->unsignedBigInteger('parent_structure_id')->nullable();
        $table->timestamps();
    });

    Schema::table('structure', function (Blueprint $table) {
        $table->foreign('parent_structure_id')->references('id')->on('structure')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structure');
    }
};
