<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form4;
use App\Base;
use App\Revista;

class Form4Controller extends Controller
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
        return view("Form4.index");
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
        $form4= new Form4;
        
        return view("Form4.create", ["form4" => $form4])->with('base',$bases)->with('revista',$revista);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $form4 = new Form4;
        $form4->id_info=$id;

        if ($request->Tema1==null  ) { $request->Tema1=''; }
        if ($request->Tema2==null ) { $request->Tema2=''; }
        if ($request->Tema3==null ) { $request->Tema3=''; }
        if ($request->Tema4==null  ) { $request->Tema4=''; }

        $form4->Tema1=$request->Tema1;
        $form4->Tema2=$request->Tema2;
        $form4->Tema3=$request->Tema3;
        $form4->Tema4=$request->Tema4;

        $form4->Country=$request->Country;
        $form4->Focus=$request->Focus;
        $form4->Agency=$request->Agency;
        $form4->Keyboard=$request->Keyboard;
        $form4->Abstract=$request->Abstract;
        
        $form4->save();

        if($form4->save()){
            return redirect("/infobase");
        }else{
            return view("form3.create");
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
