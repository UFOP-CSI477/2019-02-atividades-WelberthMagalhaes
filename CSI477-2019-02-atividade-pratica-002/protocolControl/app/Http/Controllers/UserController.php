<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       // $users = User::orderBy('nome')->get();
       // return view ('users.index', [ 'users' => $users]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       $estados = Estado::orderBy('nome')->get();
       return view('users.create', ['estados' => $estados]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       //dd($request); //faz o dump(printf da variavel e encerra

       //Validação

       //Gravar
       //Opção1
       // $c = new User;
       // $c->nome = $request->nome;
       // $c->estado_id = $request->estado_id;
       // $c->save();

       //Opção2
       User::create($request->all());//nome das tags de entrada com mesmo nome do BD

       //return redirect('/users');
       return redirect()->route('users.index');

   }

   /**
    * Display the specified resource.
    *
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */
   public function show(User $user)
   { //public function show($id){ $user = User::find($id); }
       //dd($user);
       return view('users.show', ['user' => $user]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */
   public function edit(User $user)
   {
     $estados = Estado::orderBy('nome')->get();
     return view('users.edit', ['estados' => $estados, 'user' => $user]);

   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, User $user)
   {
       dd($request);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */
   public function destroy(User $user)
   {
       //
   }
}
