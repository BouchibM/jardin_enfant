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
        Schema::table('parent', function (Blueprint $table) {
        $table->string('tel_domicile')->change();
        $table->string('tel_post')->change();
        $table->string('tel_Portable')->change();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parent', function (Blueprint $table) {
            //
        });
    }
};
