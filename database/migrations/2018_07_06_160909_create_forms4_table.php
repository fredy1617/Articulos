<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForms4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms4', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_info')->unsigned();
            $table->foreign('id_info')->references('id')->on('bases');
            
            $table->string('Country');
            $table->string('Focus');
            $table->string('Agency');
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
        Schema::dropIfExists('forms4');
    }
}
