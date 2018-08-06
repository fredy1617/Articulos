<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Mail;
class PassController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
     public function pass($code)
    {
        $users=User::where('code',$code);
        $exist=$users->count();
        $user=$users->first();
        if($exist==1 and $user->activate==0){
            $id=$user->id;
            return view("auth.date_complete",compact('id'));
        }else{
            return redirect('/');
        }
    }

    public function guardar(Request $request,$id)
    {
        $user=User::find($id);
        $user->password=bcrypt($request->password);
        $user->save();
        $email='psrodro@gmail.com';
        $de=$user->email;
        $dates=array('name'=>$user->name,'code'=>$user->code);
        $this->Email($dates,$email,$de);

        return view('fin');
    }
    function Email($dates,$email,$de){
        Mail::send('emails.aceptar',$dates, function($message) use ($email,$de){
            $message->subject('Solicitud de aprobación');
            $message->to($email);
            $message->from($de,'Petición...');
        });

    }
    public function aceptar($code)
    {
        $users=User::where('code',$code);
        $exist=$users->count();
        $user=$users->first();
        if($exist==1 and $user->activate==0){
            $id=$user->id;
            $nombre=$user->name;
            $correo=$user->email;
            return view("auth.si_no",compact('id'),['nombre'=>$nombre,'correo'=>$correo]);
        }else{
            return redirect('/');
        }   
    }
    public function save(Request $request,$id)
    {

        $user=User::find($id);
        if ($request->activate==null ) { $request->activate=0; }
        $user->activate=$request->activate;
        $user->save();

        return redirect('/');
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
