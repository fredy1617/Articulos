<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Autor;
use App\Base;

class AutorController extends Controller
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
        $autor = Autor::all();

        
        return view('autor.index', ["autor" => $autor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    { 
        $autor = new autor;
        return view("autor.create",["autor" => $autor],compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request , $id)
    {
        $autor = new Autor;

        $autor->id_info=$id;
        
        $autor->Nombre_1=$request->Nombre_1;
        $autor->Apellido_1=$request->Apellido_1;
        $autor->Nombre_2=$request->Nombre_2;
        $autor->Apellido_2=$request->Apellido_2;
        $autor->Nombre_3=$request->Nombre_3;
        $autor->Apellido_3=$request->Apellido_3;
        $autor->Nombre_4=$request->Nombre_4;
        $autor->Apellido_4=$request->Apellido_4;
        $autor->Nombre_5=$request->Nombre_5;
        $autor->Apellido_5=$request->Apellido_5;
        
        $autor->save();

        if($autor->save()){
            return redirect("/infobase/");
        }else{
            return view("autor.create");
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
