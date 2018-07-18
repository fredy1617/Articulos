<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForms2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_info')->unsigned();
            $table->foreign('id_info')->references('id')->on('bases');
            
            $table->string('Tema1');
            $table->string('Tema2');
            $table->string('Tema3');
            $table->string('Tema4');
            
            $table->string('Pais');
            $table->string('Converge');
            $table->string('Time');
            $table->string('MILP_MINLP');
            $table->string('DP');
            $table->string('Bi_Level');
            $table->string('GT');
            $table->string('Uncertainty');
            $table->string('Solve_Method');
            $table->string('Focus_Type');
            $table->string('Math_Type');
            $table->string('Cost');
            $table->string('CO2_Emissions');
            $table->string('Import_Fuel');
            $table->string('Reliatibity');
            $table->string('Water_withdrawal');
            $table->string('Price_fuel_risk');
            $table->string('Constraist_violation');
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
        Schema::dropIfExists('forms2');
    }
}
