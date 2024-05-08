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
        Schema::table('parent', function (Blueprint $table) {
        $table->date('Date_de_naissance')->nullable()->change();
            $table->integer('tel_domicile')->nullable()->change();
            $table->integer('tel_post')->nullable()->change();
            $table->integer('tel_Portable')->nullable()->change();
            $table->string('situation_familiale')->nullable()->change();
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
        $table->date('Date_de_naissance')->nullable(false)->change();
            $table->integer('tel_domicile')->nullable(false)->change();
            $table->integer('tel_post')->nullable(false)->change();
            $table->integer('tel_Portable')->nullable(false)->change();
            $table->string('situation_familiale')->nullable(false)->change();
            $table->string('Lieu')->nullable(false)->change();
            $table->string('Adresse_actuelle')->nullable(false)->change();
            $table->string('Groupe_sanguin')->nullable(false)->change();
    }
};
