<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id('movie_id');
            $table->unsignedBigInteger('genre_id');

            $table->foreign('genre_id')->references('genre_id')->on('genres')->onDelete('cascade');

            $table->string('title');
            $table->string('photo');
            $table->longText('description');
            $table->double('rating');
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
