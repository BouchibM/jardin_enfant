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
    Schema::table('classe', function (Blueprint $table) {
        $table->renameColumn('id', 'code'); // Rename the column
    });
}

public function down()
{
    Schema::table('classe', function (Blueprint $table) {
        $table->renameColumn('code', 'id'); // Rename the column back
    });
}

};