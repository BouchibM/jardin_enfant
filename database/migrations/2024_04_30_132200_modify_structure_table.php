<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('structure', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['parent_structure_id']);

            // Drop the parent_structure_id column
            $table->dropColumn('parent_structure_id');

            // Rename the id column to code
            $table->renameColumn('id', 'code');

            // Add the entreprise_id foreign key
            $table->unsignedBigInteger('entreprise_id');
            $table->foreign('entreprise_id')->references('id')->on('entreprise');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('structure', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['entreprise_id']);

            // Drop the entreprise_id column
            $table->dropColumn('entreprise_id');

            // Rename the code column back to id
            $table->renameColumn('code', 'id');

            // Add the parent_structure_id foreign key back
            $table->unsignedBigInteger('parent_structure_id')->nullable();
            $table->foreign('parent_structure_id')->references('id')->on('structure')->onDelete('cascade');
        });
    }
};
