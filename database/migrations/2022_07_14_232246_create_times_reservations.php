<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesReservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_reservations', function (Blueprint $table) {
            $table->id();
            $table->binary('date');
            $table->time('time');
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('movie_theater_id');
            $table->unsignedBigInteger('cine_id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('movie_theater_id')->references('id')->on('movie_theaters');
            $table->foreign('cine_id')->references('id')->on('cines');
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
        Schema::dropIfExists('time_reservations');
    }
}
