<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use Auth;

class UserController extends Controller
{
  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $users = User::orderBy('name')->get();
       return view ('users.index', [ 'users' => $users]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('users.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
        //Gravar
       //Opção1
         $u = new User;
         $u->name = $request->name;
         $u->email = $request->email;
         $u->password = bcrypt($request->password);
         $u->type = $request->type;
         $u->save();

       //Opção2
       //User::create($request->all());//nome das tags de entrada com mesmo nome do BD
       if(Auth::check()){

         if(Auth::user()->type == 1){
           session()->flash('msg1', 'Usuário cadastrado com sucesso!');
           return redirect()->route('users.index');
         }else {
           session()->flash('msg1', 'Usuário cadastrado com sucesso!');
           return redirect()->route('users_area');
         }

       }
      session()->flash('msg1', 'Usuário cadastrado com sucesso!');
      return redirect()->route('login');

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
