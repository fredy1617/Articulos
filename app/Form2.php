<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
    protected $table = 'forms2';

    protected $fillable = [
    	'id_info', 'Tema1', 'Tema2', 'Tema3','Tema4','Pais','Converge','Time','MILP_MINLP','DP','Bi_Level','GT','Uncertainty','Solve_Method','Focus_Type','Math_Type','Cost','CO2_Emissions','Import_Fuel','Reliatibity','Water_withdrawal','Price_fuel_risk','Constraist_violation','Power_flow','Node_balance','Keyboard','Abstract',
    ];

    protected $hidden = [
    	'id_info','Tema1', 'Tema2', 'Tema3','Tema4', 'Pais','Converge','MILP_MINLP','DP','Bi_Level','GT','Uncertainty','Solve_Method','Focus_Type','Math_Type','Cost','CO2_Emissions','Import_Fuel','Reliatibity','Water_withdrawal','Price_fuel_risk','Constraist_violation','Power_flow','Node_balance','Keyboard','Abstract',
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}