<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeworksubmitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeworksubmits', function (Blueprint $table) {
            $table->id();
            $table->string('school_id')->nullable();
            $table->string('student_id')->nullable();
            $table->string('student_name')->nullable();
            $table->string('homework_id')->nullable();
            $table->longText('description')->nullable();
            $table->string('class')->nullable();
            $table->string('group')->nullable();
            $table->string('subject')->nullable();
            $table->longText('files')->nullable();
            $table->longText('startdate')->nullable();
            $table->longText('enddate')->nullable();
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
        Schema::dropIfExists('homeworksubmits');
    }
}
