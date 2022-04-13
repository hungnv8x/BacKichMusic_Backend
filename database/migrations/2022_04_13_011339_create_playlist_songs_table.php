<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist_songs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('playpist_id');
            $table->foreign('playpist_id')->references('id')->on('playpists');
            $table->unsignedBigInteger('song_id');
            $table->foreign('song_id')->references('id')->on('songs');

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
        Schema::dropIfExists('playlist_songs');
    }
}
