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
    Schema::table('enfant', function (Blueprint $table) {
        $table->dropForeign(['user_id']); // Drop the foreign key constraint
        $table->renameColumn('user_id', 'classe_id');
    });

    Schema::table('enfant', function (Blueprint $table) {
        $table->foreign('classe_id')->references('id')->on('users'); // Add the foreign key constraint back
    });
}

public function down()
{
    Schema::table('enfant', function (Blueprint $table) {
        $table->dropForeign(['classe_id']);
        $table->renameColumn('classe_id', 'user_id');
    });

    Schema::table('enfant', function (Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users');
    });
}
};