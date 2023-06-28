<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPortadaColumnToPeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peliculas', function (Blueprint $table) {
            $table->string("portada",250)->after("id_director");
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peliculas', function (Blueprint $table) {
            $table->dropColumn("portada");
            //
        });
    }
}
