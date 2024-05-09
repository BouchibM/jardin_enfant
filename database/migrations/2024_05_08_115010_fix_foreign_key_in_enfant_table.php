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
        $table->dropForeign(['classe_id']); // Drop the old foreign key constraint
        $table->foreign('classe_id')->references('id')->on('classe'); // Add the new foreign key constraint
    });
}

public function down()
{
    Schema::table('enfant', function (Blueprint $table) {
        $table->dropForeign(['classe_id']); // Drop the new foreign key constraint
        $table->foreign('classe_id')->references('id')->on('users'); // Re-add the old foreign key constraint
    });
}

};