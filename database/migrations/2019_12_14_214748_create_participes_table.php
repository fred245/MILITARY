<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soldiers_id')->unsigned();
            $table->integer('mission_id')->unsigned();
            $table->timestamps();
            $table->foreign('soldiers_id')->references('id')->on('soldiers');
            $table->foreign('mission_id')->references('id')->on('missions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participes');
    }
}
