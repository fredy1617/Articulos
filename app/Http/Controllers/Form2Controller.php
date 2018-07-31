<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form2;
use App\Base;

class Form2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $form2 = new Form2;
        $bases=Base::orderBy('titulo', 'ASC')->pluck('titulo', 'id');
        
        return view("Form2.create", ["form2" => $form2])->with('bases', $bases);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form2 = new Form2;
        $form2->id_info=$request->id_info;


        if ($request->Tema1==null  ) { $request->Tema1=''; }
        if ($request->Tema2==null ) { $request->Tema2=''; }
        if ($request->Tema3==null ) { $request->Tema3=''; }
        if ($request->Tema4==null  ) { $request->Tema4=''; }

        $form2->Tema1=$request->Tema1;
        $form2->Tema2=$request->Tema2;
        $form2->Tema3=$request->Tema3;
        $form2->Tema4=$request->Tema4;

        $form2->Pais=$request->Pais;
        $form2->Converge=$request->Converge;
        $form2->Planning_Horizon=$request->Planning_Horizon;
        $form2->Time_Perception=$request->Time_Perception;
        $form2->Balance_Time=$request->Balance_Time;
        $form2->MILP_MINLP=$request->MILP_MINLP;
     
        if ($request->DP==null  ) { $request->DP=0; }
        if ($request->Bi_Level==null ) { $request->Bi_Level=0; }
        if ($request->GT==null ) { $request->GT=0; }

        $form2->DP=$request->DP;
        $form2->Bi_Level=$request->Bi_Level;
        $form2->GT=$request->GT;
        
        $form2->Uncertainty=$request->Uncertainty;
        $form2->Solve_Method=$request->Solve_Method;
        $form2->Focus_Type=$request->Focus_Type;
        $form2->Math_Type=$request->Math_Type;


        if ($request->CostL==null and $request->Cost==null) { $request->Cost=0; }
        if ($request->CostL==1 and $request->Cost==null) { $request->Cost=1; }
        if ($request->CO2_Emissions==null ) { $request->CO2_Emissions=0; }
        if ($request->Import_Fuel==null ) { $request->Import_Fuel=0; }
        if ($request->Reliatibity==null ) { $request->Reliatibity=0; }
        if ($request->Water_withdrawal==null ) { $request->Water_withdrawal=0; }
        if ($request->Price_fuel_risk==null ) { $request->Price_fuel_risk=0; }
        if ($request->Constraist_violation==null) { $request->Constraist_violation=0; }
        $form2->Cost=$request->Cost;
        $form2->CO2_Emissions=$request->CO2_Emissions;
        $form2->Import_Fuel=$request->Import_Fuel;
        $form2->Reliatibity=$request->Reliatibity;
        $form2->Water_withdrawal=$request->Water_withdrawal;
        $form2->Price_fuel_risk=$request->Price_fuel_risk;
        $form2->Constraist_violation=$request->Constraist_violation;

        if ($request->Power_flow==null ) { $request->Power_flow=0; }
        if ($request->Node_balance==null ) { $request->Node_balance=0; }
		$form2->Power_flow=$request->Power_flow;
        $form2->Node_balance=$request->Node_balance;

        if ($request->Generation_capacity==null ) { $request->Generation_capacity=0; }
        if ($request->Generation_capacity_accumulated==null ){ $request->Generation_capacity_accumulated=0; }
        if ($request->Generation_expansion_limitation==null ){ $request->Generation_expansion_limitation=0; }
        if ($request->Capacity_available_limitation==null) { $request->Capacity_available_limitation=0; }
        if ($request->Generation_available_limitation_Wind==null ) { $request->Generation_available_limitation_Wind=0; }
        if ($request->Generation_available_limitation_Solar==null ) { $request->Generation_available_limitation_Solar=0; }
        if ($request->Generation_available_limitation_Hydro==null ) { $request->Generation_available_limitation_Hydro=0; }
        if ($request->Generation_available_limitation_NG==null) { $request->Generation_available_limitation_NG=0; }
        $form2->Generation_capacity=$request->Generation_capacity;
        $form2->Generation_capacity_accumulated=$request->Generation_capacity_accumulated;
        $form2->Generation_expansion_limitation=$request->Generation_expansion_limitation;
        $form2->Capacity_available_limitation=$request->Capacity_available_limitation;
        $form2->Generation_available_limitation_Wind=$request->Generation_available_limitation_Wind;
        $form2->Generation_available_limitation_Solar=$request->Generation_available_limitation_Solar;
        $form2->Generation_available_limitation_Hydro=$request->Generation_available_limitation_Hydro;
        $form2->Generation_available_limitation_NG=$request->Generation_available_limitation_NG;

        if ($request->Power_plants_construction_size==null ) { $request->Power_plants_construction_size=0; }
        if ($request->Power_plants_maximun_of_operation==null ) { $request->Power_plants_maximun_of_operation=0; }
        if ($request->Power_plants_minimun_of_operation==null ) { $request->Power_plants_minimun_of_operation=0; }
        if ($request->Upward_and_downward_ramping_capabilities==null) { $request->Upward_and_downward_ramping_capabilities=0; }
        if ($request->Minimun_up_and_down_times_capabilities==null ) { $request->Minimun_up_and_down_times_capabilities=0; }
        if ($request->Startup_and_shutdown==null ) { $request->Startup_and_shutdown=0; }
        $form2->Power_plants_construction_size=$request->Power_plants_construction_size;
        $form2->Power_plants_maximun_of_operation=$request->Power_plants_maximun_of_operation;
        $form2->Power_plants_minimun_of_operation=$request->Power_plants_minimun_of_operation;
        $form2->Upward_and_downward_ramping_capabilities=$request->Upward_and_downward_ramping_capabilities;
        $form2->Minimun_up_and_down_times_capabilities=$request->Minimun_up_and_down_times_capabilities;
        $form2->Startup_and_shutdown=$request->Startup_and_shutdown;
        



        if ($request->Units_Available==null ) { $request->Units_Available=0; }
        if ($request->Construction_time==null ) { $request->Construction_time=0; }
        if ($request->Maintenance==null ) { $request->Maintenance=0; }
        if ($request->Lifetime==null) { $request->Lifetime=0; }
        if ($request->Unistalled==null) { $request->Unistalled=0; }
        if ($request->Upgraded==null) { $request->Upgraded=0; }
        if ($request->CCS_constraints==null) { $request->CCS_constraints=0; }
        if ($request->Transmission_capacity==null) { $request->Transmission_capacity=0; }
        if ($request->Transmission_capacity_Accumulated==null) { $request->Transmission_capacity_Accumulated=0; }
        if ($request->Transmission_available_limitation==null) { $request->Transmission_available_limitation=0; }
        if ($request->Fuel_Demand==null) { $request->Fuel_Demand=0; }
        if ($request->Maximun_Fuel_Demand==null) { $request->Maximun_Fuel_Demand=0; }
        if ($request->Fuel_mix_ratio==null) { $request->Fuel_mix_ratio=0; }
        if ($request->Spinning_reserve==null) { $request->Spinning_reserve=0; }
        if ($request->Operating_reserve==null) { $request->Operating_reserve=0; }
        if ($request->Reserve_Margin==null) { $request->Reserve_Margin=0; }
        if ($request->Op_Reliability==null) { $request->Op_Reliability=0; }
        if ($request->Pumping_water==null) { $request->Pumping_water=0; }
        if ($request->ESS_constraints==null) { $request->ESS_constraints=0; }
        if ($request->Unit_Operating_cost==null) { $request->Unit_Operating_cost=0; }
        if ($request->Annual_budget==null) { $request->Annual_budget=0; }
        if ($request->Maximun_investment==null) { $request->Maximun_investment=0; }
        if ($request->Sold_energy==null) { $request->Sold_energy=0; }
        if ($request->Market_Power==null) { $request->Market_Power=0; }
        if ($request->Emissions==null) { $request->Emissions=0; }
        if ($request->Emissions_target==null) { $request->Emissions_target=0; }
        if ($request->Emissions_markets==null) { $request->Emissions_markets=0; }
        if ($request->Penetration_Potential==null) { $request->Penetration_Potential=0; }
        if ($request->Max_RES_penetration==null) { $request->Max_RES_penetration=0; }
        if ($request->Min_RES_contribution==null) { $request->Min_RES_contribution=0; }
        if ($request->RES_target==null) { $request->RES_target=0; }
        if ($request->RPS==null) { $request->RPS=0; }
        if ($request->Heat_consumption==null) { $request->Heat_consumption=0; }
        if ($request->Unit_clustering==null) { $request->Unit_clustering=0; }
        if ($request->Interconexion==null) { $request->Interconexion=0; }
        if ($request->DSM_projects==null) { $request->DSM_projects=0; }
     



      
        $form2->Units_Available=$request->Units_Available;
        $form2->Construction_time=$request->Construction_time;
        $form2->Maintenance=$request->Maintenance;
        $form2->Lifetime=$request->Lifetime;
        $form2->Unistalled=$request->Unistalled;
        $form2->Upgraded=$request->Upgraded;
        $form2->CCS_constraints=$request->CCS_constraints;
        $form2->Transmission_capacity=$request->Transmission_capacity;
        $form2->Transmission_capacity_Accumulated=$request->Transmission_capacity_Accumulated;
        $form2->Transmission_available_limitation=$request->Transmission_available_limitation;
        $form2->Fuel_Demand=$request->Fuel_Demand;
        $form2->Maximun_Fuel_Demand=$request->Maximun_Fuel_Demand;
        $form2->Fuel_mix_ratio=$request->Fuel_mix_ratio;
        $form2->Spinning_reserve=$request->Spinning_reserve;
        $form2->Operating_reserve=$request->Operating_reserve;
        $form2->Reserve_Margin=$request->Reserve_Margin;
        $form2->Op_Reliability=$request->Op_Reliability;
        $form2->Pumping_water=$request->Pumping_water;
        $form2->ESS_constraints=$request->ESS_constraints;
        $form2->Unit_Operating_cost=$request->Unit_Operating_cost;
        $form2->Annual_budget=$request->Annual_budget;
        $form2->Maximun_investment=$request->Maximun_investment;
        $form2->Sold_energy=$request->Sold_energy;
        $form2->Market_Power=$request->Market_Power;
        $form2->Emissions=$request->Emissions;
        $form2->Emissions_target=$request->Emissions_target;
        $form2->Emissions_markets=$request->Emissions_markets;
        $form2->Penetration_Potential=$request->Penetration_Potential;
        $form2->Max_RES_penetration=$request->Max_RES_penetration;
        $form2->Min_RES_contribution=$request->Min_RES_contribution;
        $form2->RES_target=$request->RES_target;
        $form2->RPS=$request->RPS;
        $form2->Heat_consumption=$request->Heat_consumption;
        $form2->Unit_clustering=$request->Unit_clustering;
        $form2->Interconexion=$request->Interconexion;
        $form2->DSM_projects=$request->DSM_projects;
        
        $form2->Keyboard=$request->Keyboard;
        $form2->Abstract=$request->Abstract;



        
        $form2->save();
        if ($form2->Uncertainty=="Stocastic"){$dir="/infobase/".$form2->id."/edit";}
        else{$dir="/infobase/";}
        if($form2->save()){
            return redirect($dir);
        }else{
            return view("form2.create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
