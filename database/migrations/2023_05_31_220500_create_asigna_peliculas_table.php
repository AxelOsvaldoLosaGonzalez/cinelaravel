<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaPeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigna_peliculas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_asignah');
            $table->unsignedBigInteger('id_sala');

            $table->foreign('id_asignah')->references('id')->on('asigna_horarios')->onDelete('cascade');
            $table->foreign('id_sala')->references('id')->on('salas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asigna_peliculas');
    }
}
