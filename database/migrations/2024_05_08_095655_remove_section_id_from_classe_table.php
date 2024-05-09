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
        $table->dropForeign(['section_id']); // Drop the foreign key constraint
        $table->dropColumn('section_id'); // Drop the column
    });
}

public function down()
{
    Schema::table('classe', function (Blueprint $table) {
        $table->unsignedBigInteger('section_id'); // Add the column back
        $table->foreign('section_id')->references('id')->on('sections'); // Add the foreign key constraint back
    });
}
};