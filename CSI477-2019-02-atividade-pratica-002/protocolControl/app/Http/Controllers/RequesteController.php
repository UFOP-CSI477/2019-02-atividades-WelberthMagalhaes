<?php

namespace App\Http\Controllers;

use App\Requeste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Subject;

class RequesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $requestes = Requeste::orderByDesc('date')->get()->sortBy(Subject::select('name')->get());
        $requestes = Requeste::orderBy('date','desc')->get();
        return view('requestes.index')->with('requestes', $requestes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::orderby('name')->get();
        return view('requestes.create', ['subjects' => $subjects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r = new Requeste;
        $r->user_id = Auth::user()->id;
        $r->subject_id = $request->subject_id;
        $r->description = $request->description;
        $r->date = $request->date;
        $r->save();

        return redirect()->route('requestes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requeste  $requeste
     * @return \Illuminate\Http\Response
     */
    public function show(Requeste $requeste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requeste  $requeste
     * @return \Illuminate\Http\Response
     */
    public function edit(Requeste $requeste)
    {   
        $subjects = Subject::orderBy('name')->get();
        return view('requestes.edit',['requeste' => $requeste, 'subjects' => $subjects]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requeste  $requeste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requeste $requeste)
    {
        $requeste->fill($request->all());
        $requeste->save();

        session()->flash('msg1','Protocolo atualizado com sucesso!');
        return redirect()->route('requestes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requeste  $requeste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requeste $requeste)
    {
        $requeste->delete();
        return redirect()->route('requestes.index');
    }
}
