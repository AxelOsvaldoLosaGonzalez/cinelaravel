<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignaDescuentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asigna_descuentos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_descuento');
            $table->unsignedBigInteger('id_cine');

            $table->foreign('id_descuento')->references('id')->on('descuentos')->onDelete('cascade');
            $table->foreign('id_cine')->references('id')->on('cines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asigna_descuentos');
    }
}
