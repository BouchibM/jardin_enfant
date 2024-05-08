<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructureTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('structure', function (Blueprint $table) {
            $table->string('code')->primary();  // Faire de "code" la clé primaire
            $table->string('nom');
            $table->string('str_rattachement')->nullable();
            $table->string('statue')->nullable();
            $table->unsignedBigInteger('id_entreprise');  // Clé étrangère

            // Définir la clé étrangère
            $table->foreign('id_entreprise')->references('id')->on('entreprise')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('structure');
    }
}
?>