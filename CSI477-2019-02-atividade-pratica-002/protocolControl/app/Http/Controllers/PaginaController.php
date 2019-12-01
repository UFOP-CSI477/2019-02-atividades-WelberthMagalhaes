<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    return view('login.index');
  }

 public function authenticate(Request $request)
 {
   $request->validate([
     'email' => 'required|email',
     'password' => 'required'
   ]);

   $credentials = $request->only('email', 'password');

   if (Auth::attempt($credentials)) {
     // Authentication passed...
     return redirect()->intended('users_area');
   }else {
     return redirect()->back()->with('msg', 'Acesso negado para estas credendiais');
   }
 }

}
