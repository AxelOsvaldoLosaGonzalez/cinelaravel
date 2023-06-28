<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->unsignedBigInteger('id_director');
            $table->unsignedBigInteger('id_genero');
            $table->unsignedBigInteger('id_clas');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_director')->references('id')->on('directores')->onDelete('cascade');
            $table->foreign('id_genero')->references('id')->on('generos')->onDelete('cascade');
            $table->foreign('id_clas')->references('id')->on('clasificaciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
