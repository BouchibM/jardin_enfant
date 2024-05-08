<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classe', function (Blueprint $table) {
           
        $table->id( );
        $table->string('code');
        $table->string('nom');
        $table->integer('capacite')->nullable();
        $table->unsignedBigInteger('jardin_id')->nullable();
        $table->foreign('jardin_id')->references('id')->on('jardin')->onDelete('cascade');
        $table->unsignedBigInteger('section_id')->nullable();
        $table->foreign('section_id')->references('id')->on('section')->onDelete('cascade');
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classe');
    }
};
