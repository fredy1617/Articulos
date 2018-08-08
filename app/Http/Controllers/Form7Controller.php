<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form7;

class Form7Controller extends Controller
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
    public function create($id)
    {
        $form7 = new Form7;
        return view("Form7.create",["form7" => $form7],compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $form7 = new Form7;
        $form7->id_app=$id;

        if ($request->Fuel_Price==null  ) { $request->Fuel_Price=0; }
        if ($request->Inv_Cos==null ) { $request->Inv_Cos=0; }
        if ($request->Ope_Cos==null ) { $request->Ope_Cos=0; }
        if ($request->Energy_Price==null  ) { $request->Energy_Price=0; }
        if ($request->GENCO==null  ) { $request->GENCO=0; }
        if ($request->Budget==null ) { $request->Budget=0; }
        if ($request->CO2_Price==null ) { $request->CO2_Price=0; }
        if ($request->Demand==null  ) { $request->Demand=0; }
        if ($request->RES_target==null  ) { $request->RES_target=0; }
        if ($request->RPS==null ) { $request->RPS=0; }
        if ($request->Thermal_Generation==null ) { $request->Thermal_Generation=0; }
        if ($request->RE_Source==null  ) { $request->RE_Source=0; }
        if ($request->Wind==null  ) { $request->Wind=0; }
        if ($request->Solar==null ) { $request->Solar=0; }
        if ($request->Hydro==null ) { $request->Hydro=0; }
        if ($request->Nuclear==null  ) { $request->Nuclear=0; }
        if ($request->Environmental==null  ) { $request->Environmental=0; }
        if ($request->Water==null ) { $request->Water=0; }
        if ($request->Elctric_Car==null ) { $request->Elctric_Car=0; }
        if ($request->Policies==null  ) { $request->Policies=0; }

        $form7->Fuel_Price=$request->Fuel_Price;
        $form7->Inv_Cos=$request->Inv_Cos;
        $form7->Ope_Cos=$request->Ope_Cos;
        $form7->Energy_Price=$request->Energy_Price;
        $form7->GENCO=$request->GENCO;
        $form7->Budget=$request->Budget;
        $form7->CO2_Price=$request->CO2_Price;
        $form7->Demand=$request->Demand;
        $form7->RES_target=$request->RES_target;
        $form7->RPS=$request->RPS;
        $form7->Thermal_Generation=$request->Thermal_Generation;
        $form7->RE_Source=$request->RE_Source;
        $form7->Wind=$request->Wind;
        $form7->Solar=$request->Solar;
        $form7->Hydro=$request->Hydro;
        $form7->Nuclear=$request->Nuclear;
        $form7->Environmental=$request->Environmental;
        $form7->Water=$request->Water;
        $form7->Elctric_Car=$request->Elctric_Car;
        $form7->Policies=$request->Policies;

        $form7->save();

        if($form7->save()){
            return redirect("/infobase");
        }else{
            return view("form7.create");
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
