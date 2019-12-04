@extends('principal')

@section('conteudo')

  <form method="post" action="{{ route('users.update', $user->id) }}">

    @csrf
    @method('PATCH')

    <p>Nome: <input type="text" name="name" value="{{ $user->nome }}"></p>
    <p>Email: <input type="email" name="email" value="{{ $user->email }}"></p>

    <p>Estado: </p>
    @if(Auth::user()->type == 1)
      <select name="type">          
          <option value="{{ $user->type }}">
            @if( $user->type == 1)
              Administrador
            @else
              Usuário
            @endif
          </option>
          <option value="{{ $user->type }}">
             @if( $user->type == 1)
              Administrador
            @else
              Usuário
            @endif            
          </option>
        @endforeach
      </select>
    @endif

    <input type="submit" name="btnSalvar" value="Incluir">

  </form>

@endsection
