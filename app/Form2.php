<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
    protected $table = 'forms2';

    protected $fillable = [
    	'id_info', 'Tema1', 'Tema2', 'Tema3','Tema4','Pais','Converge','Planning_Horizon','Time_Perception','Balance_Time','MILP_MINLP','DP','Bi_Level','GT','Uncertainty','Solve_Method','Focus_Type','Math_Type','Cost','CO2_Emissions','Import_Fuel','Reliatibity','Water_withdrawal','Price_fuel_risk','Constraist_violation','Power_flow','Node_balance','Generation_capacity','Generation_capacity_accumulated','Generation_expansion_limitation','Capacity_available_limitation','Generation_available_limitation_Wind','Generation_available_limitation_Solar','Generation_available_limitation_Hydro','Generation_available_limitation_NG','Power_plants_construction_size','Power_plants_maximun_of_operation','Power_plants_minimun_of_operation','Upward_and_downward_ramping_capabilities','Minimun_up_and_down_times_capabilities','Startup_and_shutdown','Units_Available','Construction_time','Maintenance','Lifetime','Unistalled','Upgraded','CCS_constraints','Transmission_capacity','Transmission_capacity_Accumulated','Transmission_available_limitation','Fuel_Demand','Maximun_Fuel_Demand','Fuel_mix_ratio','Spinning_reserve','Operating_reserve','Reserve_Margin','Op_Reliability','Pumping_water','ESS_constraints','Unit_Operating_cost','Annual_budget','Maximun_investment','Sold_energy','Market_Power','Emissions','Emissions_target','Emissions_markets','Penetration_Potential','Max_RES_penetration','Min_RES_contribution','RES_target','RPS','Heat_consumption','Unit_clustering','Interconexion','DSM_projects','Keyboard','Abstract',
    ];

    protected $hidden = [
    	'id_info','Tema1', 'Tema2', 'Tema3','Tema4', 'Pais','Converge','Planning_Horizon','Time_Perception','Balance_Time','MILP_MINLP','DP','Bi_Level','GT','Uncertainty','Solve_Method','Focus_Type','Math_Type','Cost','CO2_Emissions','Import_Fuel','Reliatibity','Water_withdrawal','Price_fuel_risk','Constraist_violation','Power_flow','Node_balance','Generation_capacity','Generation_capacity_accumulated','Generation_expansion_limitation','Capacity_available_limitation','Generation_available_limitation_Wind','Generation_available_limitation_Solar','Generation_available_limitation_Hydro','Generation_available_limitation_NG','Power_plants_construction_size','Power_plants_maximun_of_operation','Power_plants_minimun_of_operation','Upward_and_downward_ramping_capabilities','Minimun_up_and_down_times_capabilities','Startup_and_shutdown','Units_Available','Construction_time','Maintenance','Lifetime','Unistalled','Upgraded','CCS_constraints','Transmission_capacity','Transmission_capacity_Accumulated','Transmission_available_limitation','Fuel_Demand','Maximun_Fuel_Demand','Fuel_mix_ratio','Spinning_reserve','Operating_reserve','Reserve_Margin','Op_Reliability','Pumping_water','ESS_constraints','Unit_Operating_cost','Annual_budget','Maximun_investment','Sold_energy','Market_Power','Emissions','Emissions_target','Emissions_markets','Penetration_Potential','Max_RES_penetration','Min_RES_contribution','RES_target','RPS','Heat_consumption','Unit_clustering','Interconexion','DSM_projects','Keyboard','Abstract',
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }

    public function scopeIdkey($query, $name)
    {
        if(trim($name) !="")
        {
            $query->where('id_info',$name)
            ->orwhere('Keyboard','LIKE',$name.'%')
            ->orwhere('Abstract','LIKE','%'.$name.'%');
        }  
    }
    public function scopePais($query, $pais)
    {
        if(trim($pais) !="")
        {
            $query->where('Pais','LIKE','%'.$pais.'%');
        }  
    }
    public function scopePH($query, $PH)
    {
        if(trim($PH) !="")
        {
            $query->where('Planning_Horizon',$PH);
        }  
    } 
    public function scopeTP($query, $TP)
    {
        if(trim($TP) !="")
        {
            $query->where('Time_Perception',$TP);
        }  
    }
    public function scopeBT($query, $BT)
    {
        if(trim($BT) !="")
        {
            $query->where('Balance_Time',$BT);
        }  
    }
    public function scopeMath($query, $math)
    {
        if(trim($math) !="")
        {
            $query->where('MILP_MINLP',$math);
        }   
    }
    public function scopeDP($query, $DP)
    {
        if(trim($DP) !="")
        {
            $query->where('DP',$DP);
        }   
    }
     public function scopeBi($query, $Bi)
    {
        if(trim($Bi) !="")
        {
            $query->where('Bi_Level',$Bi);
        }   
    } 
    public function scopeGT($query, $GT)
    {
        if(trim($GT) !="")
        {
            $query->where('GT',$GT);
        }   
    }
    public function scopeUncertainty($query, $Uncertainty)
    {
        if(trim($Uncertainty) !="")
        {
            $query->where('Uncertainty',$Uncertainty);
        }   
    }
    public function scopeSolve($query, $Solve)
    {
        if(trim($Solve) !="")
        {
            $query->where('Solve_Method',$Solve);
        }   
    }
    public function scopeFT($query, $FT)
    {
        if(trim($FT) !="")
        {
            $query->where('Focus_Type',$FT);
        }   
    }
    public function scopeMT($query, $MT)
    {
        if(trim($MT) !="")
        {
            $query->where('Math_Type',$MT);
        }   
    }
    public function scopeCost($query, $Cost)
    {
        if(trim($Cost) !="")
        {
            $query->where('Cost',$Cost);
        }   
    }
    public function scopeCO2($query, $CO2)
    {
        if(trim($CO2) !="")
        {
            $query->where('CO2_Emissions',$CO2);
        }   
    }
    public function scopeImport($query, $Import)
    {
        if(trim($Import) !="")
        {
            $query->where('Import_Fuel',$Import);
        }   
    }
    public function scopeReliatibity($query, $Reliatibity)
    {
        if(trim($Reliatibity) !="")
        {
            $query->where('Reliability',$Reliatibity);
        }   
    }
    public function scopeWater($query, $Water)
    {
        if(trim($Water) !="")
        {
            $query->where('Water_withdrawal',$Water);
        }   
    }
    public function scopePrice($query, $Price)
    {
        if(trim($Price) !="")
        {
            $query->where('Price_fuel_risk',$Price);
        }   
    }
    public function scopeConstraist($query, $Constraist)
    {
        if(trim($Constraist) !="")
        {
            $query->where('Constraist_violation',$Constraist);
        }   
    }
    public function scopeDemand($query, $Demand)
    {
        if(trim($Demand) !="")
        {
            $query->where('Power_flow',$Demand)
            ->orwhere('Node_balance',$Demand);
        }   
    }
    public function scopeplants_planning($query, $plants_planning)
    {
        if(trim($plants_planning) !="")
        {
            $query->where('Generation_capacity',$plants_planning)
            ->orwhere('Generation_capacity_accumulated',$plants_planning)
            ->orwhere('Generation_expansion_limitation',$plants_planning)
            ->orwhere('Capacity_available_limitation',$plants_planning)
            ->orwhere('Generation_available_limitation_Wind',$plants_planning)
            ->orwhere('Generation_available_limitation_Solar',$plants_planning)
            ->orwhere('Generation_available_limitation_Hydro',$plants_planning)
            ->orwhere('Generation_available_limitation_NG',$plants_planning);
        }   
    }

    public function scopeplants_operation($query, $plants_operation)
    {
        if(trim($plants_operation) !="")
        {
            $query->where('Power_plants_construction_size',$plants_operation)
            ->orwhere('Power_plants_maximun_of_operation',$plants_operation)
            ->orwhere('Power_plants_minimun_of_operation',$plants_operation)
            ->orwhere('Upward_and_downward_ramping_capabilities',$plants_operation)
            ->orwhere('Minimun_up_and_down_times_capabilities',$plants_operation)
            ->orwhere('Startup_and_shutdown',$plants_operation);
        }   
    }
    public function scopeplants_other($query, $plants_other)
    {
        if(trim($plants_other) !="")
        {
            $query->where('Units_Available',$plants_other)
            ->orwhere('Construction_time',$plants_other)
            ->orwhere('Maintenance',$plants_other)
            ->orwhere('Lifetime',$plants_other)
            ->orwhere('Unistalled',$plants_other)
            ->orwhere('Upgraded',$plants_other)
            ->orwhere('CCS_constraints',$plants_other);
        }   
    }
     public function scopeTransmission($query, $Transmission)
    {
        if(trim($Transmission) !="")
        {
            $query->where('Transmission_capacity',$Transmission)
            ->orwhere('Transmission_capacity_Accumulated',$Transmission)
            ->orwhere('Transmission_available_limitation',$Transmission);
        }   
    }
     public function scopeFuel($query, $Fuel)
    {
        if(trim($Fuel) !="")
        {
            $query->where('Transmission_capacity',$Fuel)
            ->orwhere('Transmission_capacity_Accumulated',$Fuel)
            ->orwhere('Transmission_available_limitation',$Fuel);
        }   
    }
    public function scopeOperation($query, $Operation)
    {
        if(trim($Operation) !="")
        {
            $query->where('Spinning_reserve',$Operation)
            ->orwhere('Operating_reserve',$Operation)
            ->orwhere('Reserve_Margin',$Operation)
            ->orwhere('Op_Reliability',$Operation);
        }   
    }
    public function scopeStorage($query, $Storage)
    {
        if(trim($Storage) !="")
        {
            $query->where('Spinning_reserve',$Storage)
            ->orwhere('Operating_reserve',$Storage);
        }   
    }
    public function scopeFinacial($query, $Finacial)
    {
        if(trim($Finacial) !="")
        {
            $query->where('Spinning_reserve',$Finacial)
            ->orwhere('Operating_reserve',$Finacial)
            ->orwhere('Reserve_Margin',$Finacial)
            ->orwhere('Op_Reliability',$Finacial)
            ->orwhere('Op_Reliability',$Finacial);
        }   
    }
    public function scopeEnvioramental($query, $Envioramental)
    {
        if(trim($Envioramental) !="")
        {
            $query->where('Spinning_reserve',$Envioramental)
            ->orwhere('Operating_reserve',$Envioramental)
            ->orwhere('Reserve_Margin',$Envioramental)
            ->orwhere('Op_Reliability',$Envioramental);
        }   
    }





}