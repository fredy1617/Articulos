<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
    protected $table = 'forms2';

    protected $fillable = [
    	'id_info', 'Tema1', 'Tema2', 'Tema3','Tema4','Pais','Converge','Time','MILP_MINLP','DP','Bi_Level','GT','Uncertainty','Solve_Method','Focus_Type','Math_Type','Cost','CO2_Emissions','Import_Fuel','Reliatibity','Water_withdrawal','Price_fuel_risk','Constraist_violation','Power_flow','Node_balance','Generation_capacity','Generation_capacity_accumulated','Generation_expansion_limitation','Capacity_available_limitation','Generation_available_limitation_Wind','Generation_available_limitation_Solar','Generation_available_limitation_Hydro','Generation_available_limitation_NG','Power_plants_construction_size','Power_plants_maximun_of_operation','Power_plants_minimun_of_operation','Upward_and_downward_ramping_capabilities','Minimun_up_and_down_times_capabilities','Startup_and_shutdown','Units_Available','Construction_time','Maintenance','Lifetime','Unistalled','Upgraded','CCS_constraints','Transmission_capacity','Transmission_capacity_Accumulated','Transmission_available_limitation','Fuel_Demand','Maximun_Fuel_Demand','Fuel_mix_ratio','Spinning_reserve','Operating_reserve','Reserve_Margin','Op_Reliability','Pumping_water','ESS_constraints','Unit_Operating_cost','Annual_budget','Maximun_investment','Sold_energy','Market_Power','Emissions','Emissions_target','Emissions_markets','Penetration_Potential','Max_RES_penetration','Min_RES_contribution','RES_target','RPS','Heat_consumption','Unit_clustering','Interconexion','DSM_projects','Keyboard','Abstract',
    ];

    protected $hidden = [
    	'id_info','Tema1', 'Tema2', 'Tema3','Tema4', 'Pais','Converge','MILP_MINLP','DP','Bi_Level','GT','Uncertainty','Solve_Method','Focus_Type','Math_Type','Cost','CO2_Emissions','Import_Fuel','Reliatibity','Water_withdrawal','Price_fuel_risk','Constraist_violation','Power_flow','Node_balance','Generation_capacity','Generation_capacity_accumulated','Generation_expansion_limitation','Capacity_available_limitation','Generation_available_limitation_Wind','Generation_available_limitation_Solar','Generation_available_limitation_Hydro','Generation_available_limitation_NG','Power_plants_construction_size','Power_plants_maximun_of_operation','Power_plants_minimun_of_operation','Upward_and_downward_ramping_capabilities','Minimun_up_and_down_times_capabilities','Startup_and_shutdown','Units_Available','Construction_time','Maintenance','Lifetime','Unistalled','Upgraded','CCS_constraints','Transmission_capacity','Transmission_capacity_Accumulated','Transmission_available_limitation','Fuel_Demand','Maximun_Fuel_Demand','Fuel_mix_ratio','Spinning_reserve','Operating_reserve','Reserve_Margin','Op_Reliability','Pumping_water','ESS_constraints','Unit_Operating_cost','Annual_budget','Maximun_investment','Sold_energy','Market_Power','Emissions','Emissions_target','Emissions_markets','Penetration_Potential','Max_RES_penetration','Min_RES_contribution','RES_target','RPS','Heat_consumption','Unit_clustering','Interconexion','DSM_projects','Keyboard','Abstract',
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}