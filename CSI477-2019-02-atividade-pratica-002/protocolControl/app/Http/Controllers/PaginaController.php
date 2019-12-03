<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use User;

class PaginaController extends Controller
{
  public function welcome(){
    return view('welcome');
  }

  public function index(){
    return view('principal');
    //return "Página Principal";
  }

  public function loginIndex(){
    if(Auth::check())
    {
      return view('users_area.index');
    }else
    {
      return view('login.index');
    }
  }

  public function admins_area(){
    return view('admins_area.index');
  }

  public function authenticate(Request $request){

    $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials))
    {
      // Authentication passed...
      if($request->type == 1){
        return redirect()->intended('admins_area');
      }else{
        return redirect()->intended('users_area');
      }
    }else {
     return redirect()->back()->with('msg', 'Acesso negado para estas credendiais');
    }
  }

}
