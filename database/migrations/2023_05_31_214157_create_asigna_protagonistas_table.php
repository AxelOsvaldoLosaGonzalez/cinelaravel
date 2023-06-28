<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaProtagonistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigna_protagonistas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_pelicula');
            $table->unsignedBigInteger('id_protagonista');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_pelicula')->references('id')->on('peliculas')->onDelete('cascade');
            $table->foreign('id_protagonista')->references('id')->on('protagonistas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asigna_protagonistas');
    }
}
