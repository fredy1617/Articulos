<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form3;
use App\Base;

class Form3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Form3.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form3 = new Form3;
        $bases=Base::orderBy('titulo', 'ASC')->pluck('titulo', 'id');
        
        return view("Form3.create", ["form3" => $form3])->with('bases', $bases);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form3 = new Form3;
        $form3->id_info=$request->id_info;
        $form3->Country=$request->Country;

        $autor->Focus=$request->Focus;
        $autor->Tecnology=$request->Tecnology;
        $autor->Economic=$request->Economic;
        $autor->Environment=$request->Environment;
        $autor->Social=$request->Social;
        
        if ($request->Other==null) {
            $request->Other=" ";
        }
        
        $autor->Other=$request->Other;
        $autor->Keyboard=$request->Keyboard;
        $autor->Abstract=$request->Abstract;
        $autor->save();

        if($autor->save()){
            return redirect("/form3");
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
