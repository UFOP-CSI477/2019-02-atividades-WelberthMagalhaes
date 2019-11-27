<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
  public function welcome(){
    return view('welcome');
  }

  public function index(){
    return view('principal');
    //return "Página Principal";
  }

}
