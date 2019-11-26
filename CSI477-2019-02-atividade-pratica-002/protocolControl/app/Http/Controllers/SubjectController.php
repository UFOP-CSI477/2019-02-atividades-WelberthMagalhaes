<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
  public function index()
  {
    $subjects = Subject::orderby('name', 'asc')->paginate(10);
    return view('subjects.index')->with('subjects', $subjects);
  }
}
