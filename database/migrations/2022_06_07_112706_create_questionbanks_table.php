<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionbanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionbanks', function (Blueprint $table) {
            $table->id();
            $table->string('school_id')->nullable();
            $table->string('year')->nullable();
            $table->string('class')->nullable();
            $table->string('group')->nullable();
            $table->string('subject')->nullable();
            $table->string('question')->nullable();
            $table->string('answers')->nullable();
            $table->string('currect_answer')->nullable();
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
        Schema::dropIfExists('questionbanks');
    }
}
