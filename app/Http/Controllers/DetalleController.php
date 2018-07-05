<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DetalleVentaRequest;
use App\Detalleventa;
use App\Venta;
use App\Factura;
use App\Producto;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle = Detalleventa::all();
        /**$detalle->each(function($detalle){
            $detalle->productos;
            dd($detalle);

        });*/
        return view('detalle.index')->with("detalle", $detalle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalle = new Detalleventa;
        $venta=Venta::orderBy('id', 'ASC')->pluck('id', 'id');
        $factura=Factura::orderBy('id', 'ASC')->pluck('id', 'id');
        $producto=Producto::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        return view("detalle.create", ["detalle" => $detalle])->with('ventas', $venta)->with('facturas', $factura)->with('productos', $producto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetalleVentaRequest $request)
    {
        $detalle = new Detalleventa;
        
        $detalle->venta_id=$request->venta_id;
        $detalle->factura_id=$request->factura_id;
        $detalle->producto_id=$request->producto_id;
        /*$categoria->user_id= Auth::user()->id;*/
        
        $detalle->save();

        if($detalle->save()){
            return redirect("/detalle");
        }else{
            return view("detalle.create");
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
        
        $detalle = Detalleventa::find($id);
        $venta=Venta::orderBy('id', 'ASC')->pluck('id', 'id');
        $factura=Factura::orderBy('id', 'ASC')->pluck('id', 'id');
        $producto=Producto::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        return view("detalle.edit", ["detalle" => $detalle])->with('ventas', $venta)->with('facturas', $factura)->with('productos', $producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DetalleVentaRequest $request, $id)
    {
        //
        $detalle = Detalleventa::find($id);
        
        $detalle->venta_id=$request->venta_id;
        $detalle->factura_id=$request->factura_id;
        $detalle->producto_id=$request->producto_id;

        if($detalle->save()){
            return redirect("/detalle");
        }else{
            return view("detalle.edit");
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
        Detalleventa::destroy($id);

        return redirect('/detalle');
    }
}
