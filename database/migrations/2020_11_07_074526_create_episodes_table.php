<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id('episode_id');
            // $table->foreignId('movie_id')->constrained()->onDelete('cascade');
            
            $table->unsignedBigInteger('movie_id');

            $table->foreign('movie_id')->references('movie_id')->on('movies')->onDelete('cascade');
            $table->integer('episode');
            $table->string('title');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
