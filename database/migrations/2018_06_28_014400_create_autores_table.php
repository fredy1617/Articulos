<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autores', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_info')->unsigned();
            $table->foreign('id_info')->references('id')->on('bases');
            
            $table->string('Nombre_1');
            $table->string('Apellido_1');
            $table->string('Nombre_2');
            $table->string('Apellido_2');
            $table->string('Nombre_3');
            $table->string('Apellido_3');
            $table->string('Nombre_4');
            $table->string('Apellido_4');
            $table->string('Nombre_5');
            $table->string('Apellido_5');
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
        Schema::dropIfExists('autores');
    }
}
