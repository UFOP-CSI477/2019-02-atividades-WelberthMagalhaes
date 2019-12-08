@extends('principal')

@section('conteudo')


<div class="wrapper">
    <h3 class="text-center font-weight-bold text-monospace"><p> Novo Protocolo</p></h3>
    <div class="form-group">
        <form method="post" action="{{ route('subjects.store') }}">
            @csrf
            <div class="form-group">            
                <label>Nome:</label><br>
                <input class="form-control" type="text" name="name">
                <label>Preço:</label><br>
                <input class="form-control" type="text" name="price" placeholder="0.00">            
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="btnSalvar" style="margin-left: 30%; margin-top: 4px">Incluir</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection