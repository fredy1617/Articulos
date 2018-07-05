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
        $autor = new Autor;
        $bases=Base::orderBy('titulo', 'ASC')->pluck('titulo', 'id');
        
        return view("autor.create", ["autor" => $autor])->with('bases', $bases);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autor = new Autor;
        $autor->id_info=$request->id_info;
        $autor->autor1=$request->autor1;
        
        if ($request->autor2==null or $request->autor3==null or $request->autor4==null or $request->autor5==null) {

            $request->autor2=" ";
            $request->autor3=" ";
            $request->autor4=" ";
            $request->autor5=" ";
        }
        
        $autor->autor2=$request->autor2;
        $autor->autor3=$request->autor3;
        $autor->autor4=$request->autor4;
        $autor->autor5=$request->autor5;
        /*$categoria->user_id= Auth::user()->id;*/
        
        $autor->save();

        if($autor->save()){
            return redirect("/autor");
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
