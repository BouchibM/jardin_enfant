<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeNullableInEnfantsTable extends Migration
{
    public function up()
    {
        Schema::table('enfant', function (Blueprint $table) {
            $table->string('Adresse_actuelle')->nullable()->change();
            $table->string('Groupe_sanguin')->nullable()->change();

        });
    }

    public function down()
    {
        Schema::table('enfant', function (Blueprint $table) {
            $table->string('Adresse_actuelle')->nullable(false)->change();
            $table->string('Groupe_sanguin')->nullable(false)->change();
        });
    }
}

