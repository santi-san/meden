<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('catalog');
            $table->date('released_at');
            $table->string('format');
            $table->string('tracklist');
            
            /* Laravel 7>
            $table->unsignedBigInteger('artist_id');
            $table->foreignId('artist_id')->references('id')->on('artists');
            Resumido si cumplimos con las siguientes convenciones:
                Las tablas y columnas están definidas en inglés
                Las tablas están en plural (users, posts)
                Las llaves primarias se llaman id
                Las columnas que representan llaves foráneas llevan el nombre de la tabla a la que hacen referencia en singular seguido del sufijo _id (por ejemplo, como la tabla se llama users la llave foránea será users en singular + _id es decir user_id).
            */
            $table->foreignId('artist_id')
                    ->constrained()  // <-- DEFINE LA RESTRICCION DE LLAVE FORANEA
                    ->onDelete('cascade'); // <-- Si se borra el artista que se borre todos los albums relacionados al mismo


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
        Schema::dropIfExists('albums');
    }
}
