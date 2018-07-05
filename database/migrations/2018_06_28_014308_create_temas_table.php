<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_info')->unsigned();
            $table->foreign('id_info')->references('id')->on('bases');

            $table->string('tema1');
            $table->string('tema2');
            $table->string('tema3');
            $table->string('tema4');
            $table->string('tema5');

            $table->string('tema6');
            $table->string('tema7');
            $table->string('tema8');
            $table->string('tema9');
            $table->string('tema10');
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
        Schema::dropIfExists('temas');
    }
}
