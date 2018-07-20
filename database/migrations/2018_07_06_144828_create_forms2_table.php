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
            $table->string('Power_flow');
            $table->string('Node_balance');
            $table->string('Generation_capacity');
            $table->string('Generation_capacity_accumulated');
            $table->string('Generation_expansion_limitation');
            $table->string('Capacity_available_limitation');
            $table->string('Generation_available_limitation_Wind');
            $table->string('Generation_available_limitation_Solar');
            $table->string('Generation_available_limitation_Hydro');
            $table->string('Generation_available_limitation_NG');
            $table->string('Power_plants_construction_size');
            $table->string('Power_plants_maximun_of_operation');
            $table->string('Power_plants_minimun_of_operation');
            $table->string('Upward_and_downward_ramping_capabilities');
            $table->string('Minimun_up_and_down_times_capabilities');
            $table->string('Startup_and_shutdown');
            $table->string('Units_Available');
            $table->string('Construction_time');
            $table->string('Maintenance');
            $table->string('Lifetime');
            $table->string('Unistalled');
            $table->string('Upgraded');
            $table->string('CCS_constraints');
            $table->string('Transmission_capacity');
            $table->string('Transmission_capacity_Accumulated');
            $table->string('Transmission_available_limitation');
            $table->string('Fuel_Demand');
            $table->string('Maximun_Fuel_Demand');
            $table->string('Fuel_mix_ratio');
            $table->string('Spinning_reserve');
            $table->string('Operating_reserve');
            $table->string('Reserve_Margin');
            $table->string('Op_Reliability');
            $table->string('Pumping_water');
            $table->string('ESS_constraints');
            $table->string('Unit_Operating_cost');
            $table->string('Annual_budget');
            $table->string('Maximun_investment');
            $table->string('Sold_energy');
            $table->string('Market_Power');
            $table->string('Emissions');
            $table->string('Emissions_target');
            $table->string('Emissions_markets');
            $table->string('Penetration_Potential');
            $table->string('Max_RES_penetration');
            $table->string('Min_RES_contribution');
            $table->string('RES_target');
            $table->string('RPS');
            $table->string('Heat_consumption');
            $table->string('Unit_clustering');
            $table->string('Interconexion');
            $table->string('DSM_projects');
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
