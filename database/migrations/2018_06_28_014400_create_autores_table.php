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
            
            $table->string('Autor1');
            $table->string('Autor2');
            $table->string('Autor3');
            $table->string('Autor4');
            $table->string('Autor5');

            $table->string('Autor6');
            $table->string('Autor7');
            $table->string('Autor8');
            $table->string('Autor9');
            $table->string('Autor10');
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
