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
            $table->unsignedBigInteger('section_id')->nullable(); // Add the new column
            $table->foreign('section_id')->references('id')->on('section'); // Add foreign key constraint
        });
    }
    
    public function down()
    {
        Schema::table('classe', function (Blueprint $table) {
            $table->dropForeign(['section_id']); // Drop the foreign key constraint
            $table->dropColumn('section_id'); // Drop the column
        });
    }
};