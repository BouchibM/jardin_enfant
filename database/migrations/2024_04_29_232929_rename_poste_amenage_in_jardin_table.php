<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenamePosteAmenageInJardinTable extends Migration
{
    public function up()
    {
        Schema::table('jardin', function (Blueprint $table) {
            $table->renameColumn('poste_aménagé', 'poste_amenage');
        });
    }

    public function down()
    {
        Schema::table('jardin', function (Blueprint $table) {
            $table->renameColumn('poste_amenage', 'poste_aménagé');
        });
    }
}

