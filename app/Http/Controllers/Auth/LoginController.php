<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    
 public function __construct()
    {
        $this->middleware('guest',['only'=>'login']);
    }

   use AuthenticatesUsers;
   public function login(){

    $credentials= $this->validate(request(),[
        'email'=>'email|required|string',
        'password'=>'|required|string'
    ]);
    $credentials['activate']=1;
    if(Auth::attempt($credentials)){

        return redirect('/infobase/');
    }
    return back()
            ->withErrors(['email'=>trans('auth.failed')])
            ->withInput(request(['email']));



   }
}
