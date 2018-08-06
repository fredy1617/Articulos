<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form5;
use App\Base;
use App\Revista;

class Form5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        return view("Form5.index");
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
        $form5 = new Form5;
        
        return view("Form5.create", ["form5" => $form5])->with('base',$bases)->with('revista',$revista);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $form5 = new Form5;
        $form5->id_info=$id;

        if ($request->Tema1==null  ) { $request->Tema1=''; }
        if ($request->Tema2==null ) { $request->Tema2=''; }
        if ($request->Tema3==null ) { $request->Tema3=''; }
        if ($request->Tema4==null  ) { $request->Tema4=''; }

        $form5->Tema1=$request->Tema1;
        $form5->Tema2=$request->Tema2;
        $form5->Tema3=$request->Tema3;
        $form5->Tema4=$request->Tema4;

        $form5->Focus=$request->Focus;
        $form5->Methodology=$request->Methodology;
        $form5->Models=$request->Models;
        $form5->Solvers=$request->Solvers;
        $form5->Keyboard=$request->Keyboard;
        $form5->Abstract=$request->Abstract;
        $form5->save();

        if($form5->save()){
            return redirect("/infobase");
        }else{
            return view("form5.create");
        }
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
