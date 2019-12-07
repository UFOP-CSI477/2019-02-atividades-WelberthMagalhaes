@extends('principal')

@section('conteudo')

<!-- TABELA DE EXIBIÇÃO DE DADOS -->
<table class="table table-hover table-bordered">
   <thead class="table-secondary">
     <tr>
       <th>Nome</th>
       <th>Email</th>
       <th>Tipo</th>
       @if (Auth::user()->type == 1)
       <th>Ação</th>
       @endif

     </tr>
   </thead>
   <tbody>
 @foreach($users as $u)
     <tr>
       <td>{{ $u->name }}</td>
       <td>{{ $u->email }}</td>
       <td> @if ($u->type == 1)
              Administrador
            @else
              Usuário
            @endif
       </td>
       @if (Auth::user()->type == 1)
       <td><a href="{{ route('users.edit', $u->id) }}">Editar</a></td>
       @endif
     </tr>
 @endforeach
   </tbody>
 </table>
  @if (Auth::user()->type == 1)
    <a class=" btn btn-primary" href="admins_area">Voltar</a>
    <a class=" btn btn-info" href="{{ route('users.create') }}">Novo</a>
  @else
    <a class=" btn btn-primary" href="users_area">Voltar</a>
  @endif
@endsection
