@extends('principal')

@section('conteudo')
<!-- TELA DE CRIAÇÃO DE USUÁRIO -->

    <div class="wrapper">
        <form method="post" action="{{ route('users.store') }}">
          @csrf
          <div class="form-group">
            <label>Nome: <input type="text" name="name"></label><br>
            <label>Email: <input type="email" name="email" required></label><br>
            <label>Senha: <input type="password" name="password" required></label>
            <div class="form-group">
              <label>Tipo:</label>
              <select class="" name="type" required>
                <option value="2">Usuário</option>
                @if( $USUARIO->type == 1)
                  <option value="1">Administrador</option>
                @endif
              </select><br>

              <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">
            </div>
          </div>
        </form>
      </div>

@endsection
