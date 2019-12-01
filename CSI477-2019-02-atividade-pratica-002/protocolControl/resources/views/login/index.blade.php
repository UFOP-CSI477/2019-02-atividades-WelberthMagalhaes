@extends('principal')

@section('conteudo')
<!-- TELA DE LOGIN -->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <figure class="figure">
        <img src="images/account_circle.svg" class="figure-img img-fluid" alt="User Image">
        <figcaption class="figure-caption">Sign In Management</figcaption>
      </figure>
    </div>

    <!-- Login Form -->
    <form method="POST" action="/authenticate">
      @csrf
      <div class="form-group">

          <input type="email" id="email" class="fadeIn second" name="email" placeholder="email" required>
          <br>
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>


      </div>
      <!-- <input type="submit" class="fadeIn fourth btn btn-sm" value="Log in"> -->
      <div class="form-group">
        <button class="btn btn-primary fadeIn fourth" type="submit">Log In</button>
      </div>

    </form>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    @if(session('msg'))
      <div class="alert alert-danger">
        {{session('msg')}}
      </div>
    @endif
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

@endsection
