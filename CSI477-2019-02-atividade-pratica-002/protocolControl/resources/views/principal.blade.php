<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Página principal do sistema</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/css/login.css">

    <!-- JS -->
    <script src="/js/bootstrap/js/bootstrap.js">

    </script>

  </head>
  <body >

    <!-- Links - menu lateral //-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00796B;">

      <span class="navbar-brand mb-0 h1"><a class="nav-link sm text-white"href="/">Management</a></span>

      <ul class="navbar-nav">
          <li class="nav-item"><a href="{{ route('subjects.index')}}" class="nav-link">Área Geral</a></li>
          <li class="nav-item"><a href="/loginIndex" class="nav-link">Usuário</a></li>
          <li class="nav-item"><a href="/loginIndex" class="nav-link">Administrador</a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
          @if(Auth::check())
            <li class="nav-item dropdown"><a href="/logout" class="nav-link">Log Out</a></li>
          @else
            <li class="nav-item dropdown"><a href="/loginIndex" class="nav-link">Log In</a></li>
          @endif
      </ul>

    </nav>

    @if(Session::has('msg'))
      <div class="alert alert-danger">
        {{session('msg')}}
      </div>
    @endif
    @if(Session::has('msg1'))
      <div class="alert alert-success">
        {{session('msg1')}}
      </div>
    @endif
  
    <!-- Conteúdo parte central //-->
    @yield('conteudo')

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  
  </body>
</html>
