<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_areaController extends Controller
{
    public function index()
    {
      return view('users_area.index');
    }
}
