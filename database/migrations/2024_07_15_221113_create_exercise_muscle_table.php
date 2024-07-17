<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciseMuscleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_muscle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id')->constrained()->onDelete('cascade');
            $table->foreignId('muscle_id')->constrained()->onDelete('cascade');
            $table->boolean('is_primary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_muscle');
    }
}
