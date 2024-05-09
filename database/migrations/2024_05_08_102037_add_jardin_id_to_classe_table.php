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
        $table->unsignedBigInteger('jardin_id')->nullable(); // Add the new column
        $table->foreign('jardin_id')->references('id')->on('jardin'); // Add foreign key constraint
    });
}

public function down()
{
    Schema::table('classe', function (Blueprint $table) {
        $table->dropForeign(['jardin_id']); // Drop the foreign key constraint
        $table->dropColumn('jardin_id'); // Drop the column
    });
}

};