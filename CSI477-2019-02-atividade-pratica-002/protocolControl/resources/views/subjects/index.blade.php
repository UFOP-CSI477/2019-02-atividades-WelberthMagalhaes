@extends('principal')

@section('conteudo')

<!-- VIEW SUBJECTS - TIPOS DE PROTOCOLOS -->

<table class="table table-striped table-bordered">
   <thead class="table-light">
     <tr>
       <th>Código</th>
       <th>Nome</th>
       <th>Preço</th>
       <th>Ação</th>
     </tr>
   </thead>
   <tbody>
 @foreach($subjects as $s)
     <tr>
       <td>{{ $s->id }}</td>
       <td>{{ $s->name }}</td>
       <td>{{ $s->price }}</td>
       <td><a href="{{ route('subjects.edit', $s->id) }}">Editar</a></td>
     </tr>
 @endforeach
   </tbody>
 </table>

 <a class=" btn btn-primary" href="admins_area">Voltar</a>
 @if ( Auth::check() )
  <a class=" btn btn-info" href="{{ route('subjects.create') }}">Novo</a>
 @endif


 @endsection
