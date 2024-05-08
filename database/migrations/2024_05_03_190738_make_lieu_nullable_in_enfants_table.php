<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeLieuNullableInEnfantsTable extends Migration
{
    public function up()
    {
        Schema::table('enfant', function (Blueprint $table) {
            $table->string('lieu')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('enfant', function (Blueprint $table) {
            $table->string('lieu')->nullable(false)->change();
        });
    }
}
