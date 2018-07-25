<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForms7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms7', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_app')->unsigned();
            $table->foreign('id_app')->references('id')->on('forms2');

            $table->string('Fuel_Price');
            $table->string('Inv_Cos');
            $table->string('Ope_Cos');
            $table->string('Energy_Price');
            $table->string('GENCO');
            $table->string('Budget');
            $table->string('CO2_Price');
            $table->string('Demand');
            $table->string('RES_target');
            $table->string('RPS');
            $table->string('Thermal_Generation');
            $table->string('RE_Source');
            $table->string('Wind');
            $table->string('Solar');
            $table->string('Hydro');
            $table->string('Nuclear');            
            $table->string('Environmental');
            $table->string('Water');
            $table->string('Elctric_Car');
            $table->string('Policies');
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
        Schema::dropIfExists('forms7');
    }
}
