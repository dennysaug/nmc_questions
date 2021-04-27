<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('alternative_a')->nullable();
            $table->string('alternative_b')->nullable();
            $table->string('alternative_c')->nullable();
            $table->string('alternative_d')->nullable();
            $table->string('alternative_e')->nullable();
            $table->enum('correct', ['a','b','c','d','e']);
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
        Schema::dropIfExists('questions');
    }
}
