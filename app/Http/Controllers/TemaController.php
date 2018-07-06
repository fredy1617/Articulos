<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tema;
use App\Base;

class TemaController extends Controller
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
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tema = new Tema;
        $tema->id_info=$request->id_info;
        $tema->tema1=$request->tema1;

        if ($request->tema2==null or $request->tema3==null or $request->tema4==null or $request->tema5==null) {

            $request->tema2=" ";
            $request->tema3=" ";
            $request->tema4=" ";
            $request->tema5=" ";
        }
        $tema->tema2=$request->tema2;
        $tema->tema3=$request->tema3;
        $tema->tema4=$request->tema4;
        $tema->tema5=$request->tema5;
        /*$categoria->user_id= Auth::user()->id;*/
        
        $tema->save();

        if($tema->save()){
            return redirect("/tema");
        }else{
            return view("tema.create");
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
         $tema = new Tema;
        
        $bases=Base::orderBy('titulo', 'ASC')->pluck('titulo', 'id');
        $base = Base::find($id);
        
        if ($base->tipo=="Application") {
            $lista=[ 'DSO' => 'DSO', 'EneSou' => 'EneSou', 'EneSys' => 'EneSys', 'ESS' => 'ESS', 'GEP'  => 'GEP', 'Other' => 'Other' , 'Power Dispatch'  => 'Power Dispatch' , 'Power Flow'  => 'Power Flow', 'Escenarios analysis' => 'Escenarios analysis' , 'TEP' => 'TEP'];
        }
        if ($base->tipo=="Energy Source") {
            $lista=['Biomass' => 'Biomass', 'Create BBDD' => 'Create BBDD', 'Economic' => 'Economic', 'Employment' => 'Employment', 'Input' => 'Input', 'Nuclear' => 'Nuclear', 'Parameters' => 'Parameters', 'Photovoltaic' => 'Photovoltaic', 'Waste' => 'Waste', 'Water use' => 'Water use', 'Wind' =>  'Wind', 'Wind/Mexico' => 'Wind/Mexico', 'Wind/PV/CSP' => 'Wind/PV/CSP', 'Employment' => 'Employment', 'WindEmployment' => 'WindEmployment'];
        }
        if ($base->tipo=="Report") {
            $lista=[ 'MEXX' => 'MEXX', 'NREL' => 'NREL', 'Parameters'  => 'Parameters' , 'WLEC' => 'WLEC'];
        }
        if ($base->tipo=="Review") {
            $lista=[ 'Demand Forecast' => 'Demand Forecast', 'EneSys' => 'EneSys', 'ESS' => 'ESS', 'GEP' => 'GEP', 'Indicators' => 'Indicators',  'Market' => 'Market', 'Other' => 'Other', 'Policies' => 'Policies', 'RenEne' => 'RenEne', 'TEP'=> 'TEP', 'Tools' => 'Tools'];
        }
        if ($base->tipo=="Theorist") {
            $lista=[ 'NSGA - II' => 'NSGA - II', 'SORENSEN' => 'SORENSEN'];
        }
        if ($base->tipo=="Tool") {
            $lista=[ 'BALMOREL' => 'BALMOREL', 'MARKAL' => 'MARKAL', 'NETPLAN' => 'NETPLAN', 'OSEMOSYS' => 'OSEMOSYS' ,'TIMES' => 'TIMES'];
        }
        
        return view("tema.create", ["tema" => $tema])->with('bases', $bases)->with('lista', $lista);
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
