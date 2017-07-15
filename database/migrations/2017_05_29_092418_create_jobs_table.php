<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('description');
            $table->string('requirement');
            $table->string('industry');
            $table->string('salary');
            $table->string('city');
            $table->string('country');
            $table->date('deadline');
            $table->string('career_level');
            $table->string('degree');
            $table->string('experience');
            $table->string('language');
            $table->string('skill');
            $table->tinyInteger('posted');
            $table->tinyInteger('drafted');
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
        Schema::dropIfExists('jobs');
    }
}
