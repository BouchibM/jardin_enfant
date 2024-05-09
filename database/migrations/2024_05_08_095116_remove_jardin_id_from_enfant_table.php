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
            $table->dropForeign(['jardin_id']); // Drop the foreign key constraint
            $table->dropColumn('jardin_id'); // Drop the column
        });
    }
    
    public function down()
    {
        Schema::table('enfant', function (Blueprint $table) {
            $table->unsignedBigInteger('jardin_id'); // Add the column back
            $table->foreign('jardin_id')->references('id')->on('jardins'); // Add the foreign key constraint back
        });
    }
};