<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->nullable()->after('instructions');
            $table->unsignedBigInteger('equipment_id')->after('instructions');

            // Define the foreign key constraint
            $table->foreign('equipment_id')
                ->references('id')
                ->on('equipments')
                ->onDelete('cascade')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->dropForeign(['equipment_id']);
            $table->dropForeign(['category_id']);
        });
    }
};
