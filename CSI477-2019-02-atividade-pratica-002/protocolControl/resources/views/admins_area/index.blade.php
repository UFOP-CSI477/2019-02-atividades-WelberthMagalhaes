@extends('principal')

@section('conteudo')
<!-- TELA DO ADMINISTRADOR -->
<h2 class="text-muted text-center">Área do Administrador</h2>
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
        <div class="card-body">
          <h5 class="card-title">Incluir Requerimento</h5>
          <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Acessar</a>
          <!-- <small class="text-muted">Atualizados 3 minutos atrás</small> -->
        </div>
      </div>
      <div class="card text-center">
        <!-- <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card"> -->
        <div class="card-body">
          <h5 class="card-title">Título do card</h5>
          <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
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
