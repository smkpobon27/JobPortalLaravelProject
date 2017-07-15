<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('location');
            $table->string('college')->nullable();
            $table->string('degree')->nullable();
            $table->string('field')->nullable();
            $table->string('grade')->nullable();
            $table->string('language')->nullable();
            $table->string('interest')->nullable();
            $table->string('country')->default('Bangladesh');
            $table->string('about_me')->nullable();
            $table->string('gender')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
