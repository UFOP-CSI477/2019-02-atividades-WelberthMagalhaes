@extends('principal')

@section('conteudo')
<!-- TELA DO ADMINISTRADOR -->
<h2 class="text-muted text-center">Área do Administrador</h2>
<div class="container">
  <div class="row justify-content-end">
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
        <h4 class="card-header"><strong>Usuários</strong></h4>
        <div class="card-body">
          <p class="card-text">Gerenciamento de usuários</p>
        </div>
        <div class="card-footer">
          <!-- Encaminhar para tela de visualização de usuários-->
          <a href="{{ route('users.index'), }}" class="btn btn-primary">Acessar</a>
          <!-- <small class="text-muted">Atualizados 3 minutos atrás</small> -->
        </div>
      </div>
      <div class="card text-center">
        <!-- <img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card"> -->
        <h4 class="card-header"><strong>Protocolos</strong></h4>
        <div class="card-body">
          <p class="card-text">Gerenciamento de protocolos e listagem de requerimentos.</p>
        </div>
        <div class="card-footer">
        <a href="{{ route('subjects.index') }}" class="btn btn-primary">Acessar</a>
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
