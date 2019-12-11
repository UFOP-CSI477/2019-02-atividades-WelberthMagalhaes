<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Subject;
use App\Requeste;

class SubjectController extends Controller
{
  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
  public function index()
  {
    $subjects = Subject::orderby('name', 'asc')->paginate(10);
    return view('subjects.index')->with('subjects', $subjects);
  }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
  public function create(){
    return view('subjects.create');
  }

  /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
  public function store(Request $request){

    Subject::create($request->all());
    return redirect()->route('subjects.index');
  }


    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Subject  $subject
    * @return \Illuminate\Http\Response
    */
  public function edit(Subject $subject){
    return view('subjects.edit',['subject' => $subject]);
  }

  /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Subject  $subject
    * @return \Illuminate\Http\Response
    */
  public function update(Request $request, Subject $subject){//$subject recebe o id passado pela View Edit

    $subject->fill($request->all());
    $subject->save();

    session()->flash('msg1','Protocolo atualizado com sucesso!');
    return redirect()->route('subjects.index');
  }

  /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Subject  $subject
    * @return \Illuminate\Http\Response
    */
  public function destroy(Subject $subject){
    
    $requeste = Requeste::where('subject_id', '{{ $subject->id }}')->get();
  
      foreach ($requeste as $id) {
        if( $id == $subject->id  ){
       
          session()->flash('msg','Protocolo não pode ser excuído, há requisição pendente!');
          return redirect()->route('subjects.index');
            
        }else{
          
          $subject->delete();
          session()->flash('msg1','Protocolo deletado com sucesso!');
          return redirect()->route('subjects.index');
        }
      }        
  }
}
