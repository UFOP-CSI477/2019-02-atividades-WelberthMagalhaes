@extends('principal')

@section('conteudo')

  <div class="form-group">
    <form method="post" action="{{ route('users.update', $user->id) }}">

      @csrf
      @method('PATCH')

      <div class="form-group">
        <label>Nome: <input class="form-control" type="text" name="name" value="{{ $user->name }}"></label><br>
        <label>Email: <input class="form-control" type="email" name="email" value="{{ $user->email }}"></label><br>

        <label>Tipo: </label><br>
        @if(Auth::user()->type == 1)
          <select class="custom-select" name="type" style="width:15%; ">
              <option value="1"
                @if( $user->type == 1)
                  selected
                @endif >Administrador</option>
              <option value="2"
                @if( $user->type == 2)
                 selected
                @endif >Usuário</option>
          </select>
        @endif
        <br>
        <input type="submit" name="btnSalvar" value="Incluir">
      </div>

    </form>
  </div>

@endsection
