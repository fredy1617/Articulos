<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForms3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms3', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_info')->unsigned();
            $table->foreign('id_info')->references('id')->on('bases');
            
            $table->string('Country');
            $table->string('Focus');
            $table->string('Tecnology');
            $table->string('Economic');
            $table->string('Environment');
            $table->string('Social');
            $table->string('Other');
            $table->string('Keyboard');
            $table->string('Abstract');
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
        Schema::dropIfExists('forms3');
    }
}
