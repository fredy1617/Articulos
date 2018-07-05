<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FacturaRequest;
use App\Factura;
use App\Venta;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::all();
        return view('factura.index', ["factura" => $facturas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factura = new Factura;
        $venta=Venta::orderBy('id', 'ASC')->pluck('id', 'id');
        return view("factura.create", ["factura" => $factura])->with('ventas', $venta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacturaRequest $request)
    {
        //
        $factura = new Factura;
        
        $factura->venta_id=$request->venta_id;
        $factura->total=$request->total;
        /*$categoria->user_id= Auth::user()->id;*/
        
        $factura->save();

        if($factura->save()){
            return redirect("/factura");
        }else{
            return view("factura.create");
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
        
        $factura = Factura::find($id);
        $venta=Venta::all()->pluck('id', 'id');
        return view("factura.edit", ["factura" => $factura, "ventas"=> $venta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FacturaRequest $request, $id)
    {
        //
        $factura = Factura::find($id);

        $factura->fill($request->all());
        $factura->save();
        
        
        
        if($factura->save()){
            return redirect("/factura");
        }else{
            return view("factura.edit");
        }
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
        Factura::destroy($id);

        return redirect('/factura');
    }
}
