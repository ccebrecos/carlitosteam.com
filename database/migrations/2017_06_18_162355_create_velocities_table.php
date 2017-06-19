<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVelocitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('velocities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('athlete_id')->unsigned();
            $table->enum('category', ['Cadet','Juvenil', 'Junior', 'Promesa', 'Absolut']);
            $table->string('track');
            $table->time('result');
            $table->float('wind', 2, 1)->nullable();
            $table->string("place");
            $table->date('date');
            $table->enum("field", ['AL', 'PC']);
            $table->timestamps();
        });
        Schema::table('velocities', function (Blueprint $table) {
            $table->foreign('athlete_id')->references('id')->on('athletes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('velocities');
    }
}
