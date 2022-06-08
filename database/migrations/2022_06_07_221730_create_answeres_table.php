<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnsweresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answeres', function (Blueprint $table) {
            $table->id();
            $table->string('school_id')->nullable();
            $table->string('student_id')->nullable();
            $table->string('exam_id')->nullable();
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->string('totalmark')->nullable();
            $table->string('currectans')->nullable();
            $table->longtext('answeres')->nullable();
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
        Schema::dropIfExists('answeres');
    }
}
