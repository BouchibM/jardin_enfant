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
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('email')->unique();
            $table->string('motdepass');
            $table->date('date_creation');
            $table->string('date_modification');
            $table->string('status');
            $table->unsignedBigInteger('type_user_id');
            $table->foreign('type_user_id')->references('id')->on('type_user'); 
            $table->timestamps();
        });
    }
/** password hashedin database */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateur');
    }
};
