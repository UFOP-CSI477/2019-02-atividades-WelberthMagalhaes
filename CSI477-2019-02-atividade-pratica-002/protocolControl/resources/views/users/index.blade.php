@extends('principal')

@section('conteudo')

<!-- TABELA DE EXIBIÇÃO DE DADOS -->
<table class="table table-striped table-bordered">
   <thead class="table-light">
     <tr>
       <th>Nome</th>
       <th>Email</th>
       <th>Tipo</th>
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
     </tr>
 @endforeach
   </tbody>
 </table>
 <a class=" btn btn-primary" href="users_area">Voltar</a>
@endsection
