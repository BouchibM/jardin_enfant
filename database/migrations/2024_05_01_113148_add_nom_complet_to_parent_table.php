<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNomCompletToParentTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('parent', function (Blueprint $table) {
            $table->string('nom_complet')->nullable(); // Ajout du champ nom_complet
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('parent', function (Blueprint $table) {
            
            $table->dropColumn('nom_complet'); // Suppression du champ nom_complet
        });
    }
}

?>
