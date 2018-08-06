<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Revista;
use Illuminate\Support\Facades\Input;
use DB;
use Excel;

class ExcelController extends Controller
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
        $base = Revista::all();
       
        
        return view('revista.index', ["base" => $base]);
    }

    public function getImport()
    {
      return view('revista.import');  
    }

    public function postImport()
    {
      Excel::load(Input::file('archivo'),function($reader){
        $reader->each(function($sheet){
            Revista::firstOrCreate($sheet->toArray());
        });
      });
      return redirect("/inicio");
    }
}