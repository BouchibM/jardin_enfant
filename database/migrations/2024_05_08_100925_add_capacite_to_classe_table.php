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
             $table->integer('capacite')->nullable()->change(); // Make the column nullable
         });
     }
     
     public function down()
     {
         Schema::table('classe', function (Blueprint $table) {
             $table->integer('capacite')->nullable(false)->change(); // Make the column not nullable
         });
     }
     

};