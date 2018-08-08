<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form1;
use App\Base;
use App\Revista;
class Form1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
   
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
        $bases=Base::find($id);
        $revista=Revista::find($bases->id_revista);
        
        $form1 = new Form1;
        
        return view("Form1.create",["form1" => $form1])->with('base',$bases)->with('revista',$revista);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {  
        
        $form1 = new Form1;
        $form1->id_info=$id;

        if ($request->Tema1==null  ) { $request->Tema1=''; }
        if ($request->Tema2==null ) { $request->Tema2=''; }
        if ($request->Tema3==null ) { $request->Tema3=''; }
        if ($request->Tema4==null  ) { $request->Tema4=''; }

        $form1->Tema1=$request->Tema1;
        $form1->Tema2=$request->Tema2;
        $form1->Tema3=$request->Tema3;
        $form1->Tema4=$request->Tema4;
        
        $form1->Focus=$request->Focus;
        $form1->Type=$request->Type;
        $form1->Agency=$request->Agency;
        $form1->Open_access=$request->Open_access;
        $form1->Parameters=$request->Parameters;
        $form1->Keyboard=$request->Keyboard;
        $form1->Abstract=$request->Abstract;
        $form1->save();

        if($form1->save()){
            return redirect("/infobase");
        }else{
            return view("form1.create");
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
