<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMissionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('place');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('priority_id')->unsigned();
            $table->integer('objective_id')->unsigned();
            $table->text('description');
            $table->timestamps();
            $table->foreign('priority_id')->references('id')->on('priorities');
            $table->foreign('objective_id')->references('id')->on('objectives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('missions');
    }
}
