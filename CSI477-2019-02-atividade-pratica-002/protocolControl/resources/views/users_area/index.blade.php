@extends('principal')

@section('conteudo')
<!-- TELA ÁREA DE USUÁRIO LOGADO -->
<div class="container">
  <div class="row justify-content-end">
    @if(session('msg'))
      <div class="alert alert-succes">
        {{session('msg')}}
        <button type="button" class="close" data-dismiss="alert" onclick= "$('.alert').alert()" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
    @endif

    <ul class="nav-bar">
      <li class="nav-item">
        <a class="btn btn-outline-dark" href="/logout">Log Out</a>
      </li>
    </ul>
  </div>
  <div class="row wrapper">
    <div class="card-deck">
      <div class="card text-center">
        <!-- <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card"> -->
        <div class="card-header">Novo Usuário</div>
        <div class="card-body">
          <p class="card-text">Realizar cadastro de novos usuários</p>
        </div>
        <div class="card-footer">
          <a href="{{ route('users.create'), }}" class="btn btn-primary">Acessar</a>
          <!-- <small class="text-muted">Atualizados 3 minutos atrás</small> -->
        </div>
      </div>
      <div class="card text-center">
        <!-- <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card"> -->
        <div class="card-header">Incluir Requerimento</div>
        <div class="card-body">
          <p class="card-text">Acesso à protocolização de requerimentos</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Acessar</a>
          <!-- <small class="text-muted">Atualizados 3 minutos atrás</small> -->
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
