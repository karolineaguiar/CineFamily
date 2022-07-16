<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name',55);
            $table->bigInteger('age_classification');
            $table->time('duration');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('cine_id');
            $table->foreign('genre_id')->references('id')->on('genres');
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
        Schema::dropIfExists('movies');
    }
}
