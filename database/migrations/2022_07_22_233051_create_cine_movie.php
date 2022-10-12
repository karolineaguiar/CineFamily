<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCineMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cine_movie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cine_id');
            $table->unsignedBigInteger('movie_id');
            $table->foreign('cine_id')->references('id')->on('cines');
            $table->foreign('movie_id')->references('id')->on('movies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cine_movie');
    }
}
