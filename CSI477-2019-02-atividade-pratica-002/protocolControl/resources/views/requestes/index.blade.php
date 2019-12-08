@extends('principal')

@section('conteudo')

<!-- VIEW SUBJECTS - TIPOS DE PROTOCOLOS -->

<table class="table table-striped table-bordered">
   <thead class="table-light">
     <tr>
       <th>Código</th>
       <th>Usuário</th>
       <th>Protocolo</th>
       <th>Data</th>
       <th>Ação</th>
     </tr>
   </thead>
   <tbody>
 @foreach($requestes as $r)
     <tr>
       <td>{{ $r->id }}</td>
       <td>{{ $r->user->name }}</td>
       <td>{{ $r->subject->name }}</td>
       <td>{{ $r->date }}</td>
       <td><a href="{{ route('requestes.edit', $r->id) }}">Editar</a></td>
     </tr>
 @endforeach
   </tbody>
 </table>

 @if (Auth::user()->type == 1)
    <a class=" btn btn-primary" href="admins_area">Voltar</a>
  @else
    <a class=" btn btn-primary" href="users_area">Voltar</a>
  @endif
  <a class=" btn btn-info" href="{{ route('requestes.create') }}">Novo</a>


 @endsection
