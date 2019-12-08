@extends('principal')

@section('conteudo')
<!-- TELA DO ADMINISTRADOR -->
<h2 class="text-muted text-center">Área do Administrador</h2>
<div class="container">
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
          <h4 class="card-header"><strong>Requerimentos</strong></h4>
          <div class="card-body">
            <p class="card-text">Acesso à protocolização de requerimentos. Incluir, alterar e excluir.</p>
          </div>
          <div class="card-footer">
            <a href="{{ route('requestes.index') }}" class="btn btn-primary">Acessar</a>
            <!-- <small class="text-muted">Atualizados 3 minutos atrás</small> -->
          </div>
        </div>
    </div>
  </div>
</div>

@endsection
