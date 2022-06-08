<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlineexams', function (Blueprint $table) {
            $table->id();
            $table->string('school_id')->nullable();
            $table->string('year')->nullable();
            $table->string('class')->nullable();
            $table->string('group')->nullable();
            $table->string('subject')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->datetime('start_date')->nullable();
            $table->datetime('end_date')->nullable();
            $table->string('duration')->nullable();
            $table->string('totalmark')->nullable();
            $table->longText('questions')->nullable();
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
        Schema::dropIfExists('onlineexams');
    }
}
