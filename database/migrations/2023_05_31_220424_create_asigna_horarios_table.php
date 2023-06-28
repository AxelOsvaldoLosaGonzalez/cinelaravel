<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigna_horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_horario');
            $table->unsignedBigInteger('id_pelicula');

            $table->foreign('id_horario')->references('id')->on('horarios')->onDelete('cascade');
            $table->foreign('id_pelicula')->references('id')->on('peliculas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asigna_horarios');
    }
}
