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
        $form2->Tema1=$request->Tema1;
        $form2->Tema2=$request->Tema2;
        $form2->Tema3=$request->Tema3;
        $form2->Tema4=$request->Tema4;
        $form2->Pais=$request->Pais;
        $form2->Converge=$request->Converge;
        $form2->Time=$request->Time;
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
        $form2->Cost=$request->Cost;
        $form2->CO2_Emissions=$request->CO2_Emissions;
        $form2->Import_Fuel=$request->Import_Fuel;
        $form2->Reliatibity=$request->Reliatibity;
        $form2->Water_withdrawal=$request->Water_withdrawal;
        $form2->Price_fuel_risk=$request->Price_fuel_risk;
        $form2->Constraist_violation=$request->Constraist_violation;

        if ($request->Cost==null ) { $request->Cost=" "; }
        if ($request->CO2_Emissions==null ) { $request->CO2_Emissions=" "; }
        if ($request->Import_Fuel==null ) { $request->Import_Fuel=" "; }
        if ($request->Reliatibity==null ) { $request->Reliatibity=" "; }
        if ($request->Water_withdrawal==null ) { $request->Water_withdrawal=" "; }
        if ($request->Price_fuel_risk==null ) { $request->Price_fuel_risk=" "; }
        if ($request->Constraist_violation==null) { $request->Constraist_violation=" "; }
                    

        $form2->Keyboard=$request->Keyboard;
        $form2->Abstract=$request->Abstract;
        $form2->save();

        if($form2->save()){
            return redirect("/form2");
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
