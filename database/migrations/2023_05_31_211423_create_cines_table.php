<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cines', function (Blueprint $table) {
            $table->id();
            $table->string('calle');
            $table->string('numero');
            $table->string('telefono');
            $table->unsignedBigInteger('id_ciudad');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cines');
    }
}
