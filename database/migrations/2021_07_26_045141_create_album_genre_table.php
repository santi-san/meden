<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_genre', function (Blueprint $table) {
            $table->id();

            $table->foreignId('album_id')
                    ->constrained()
                    ->onDelete('cascade');
            $table->foreignId('genre_id')
                    ->constrained()
                    ->onDelete('cascade');

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
        Schema::dropIfExists('album_genre');
    }
}
