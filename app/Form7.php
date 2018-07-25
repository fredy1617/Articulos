<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form7 extends Model
{
    protected $table = 'forms7';

    protected $fillable = [
    	'id_app','Fuel_Price', 'Inv_Cos', 'Ope_Cos','Energy_Price','GENCO', 'Budget','CO2_Price','Demand','RES_target','RPS','Thermal_Generation', 'RE_Source', 'Wind','Solar','Hydro', 'Nuclear','Environmental','Water','Elctric_Car','Policies',
    ];

    protected $hidden = [
    	'id_app','Fuel_Price', 'Inv_Cos', 'Ope_Cos','Energy_Price','GENCO', 'Budget','CO2_Price','Demand','RES_target','RPS','Thermal_Generation', 'RE_Source', 'Wind','Solar','Hydro', 'Nuclear','Environmental','Water','Elctric_Car','Policies',
    ];

    public function form2()
    {
        return $this->belongsTo('App\Form2');
    }
}
