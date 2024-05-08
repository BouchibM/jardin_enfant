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
        Schema::table('enfant', function (Blueprint $table) {
        $table->string('Lieu')->nullable()->change();
        $table->string('Adresse_actuelle')->nullable()->change();
        $table->string('Groupe_sanguin')->nullable()->change(); 
    }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->string('Lieu')->nullable(false)->change();
            $table->string('Adresse_actuelle')->nullable(false)->change();
            $table->string('Groupe_sanguin')->nullable(false)->change();
    }
};
