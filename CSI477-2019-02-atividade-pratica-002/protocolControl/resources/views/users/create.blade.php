@extends('principal')

@section('conteudo')
<!-- TELA DE CRIAÇÃO DE USUÁRIO -->

    <div class="wrapper">
      <div class="form-group">
        <form method="post" action="{{ route('users.store') }}">
          @csrf
          <div class="form-group">
            <label>Nome:</label><br>
            <input class="form-control" type="text" name="name">
            <label>Email:</label><br>
            <input class="form-control" type="email" name="email" required>
            <label >Senha:</label>
            <input class="form-control" type="password" name="password" required>
            <div class="form-group">
              <label>Tipo:</label>
              <select class="form-control" name="type" required>
                <option value="2">Usuário</option>
                @if (Auth::user()->type == 1)
                <option value="1">Administrador</option>
                @endif
              </select><br>

              <button class="btn btn-primary" type="submit" name="btnSalvar">Incluir</button>
            </div>
          </div>      
        </form>
      </div>
    </div>

@endsection
