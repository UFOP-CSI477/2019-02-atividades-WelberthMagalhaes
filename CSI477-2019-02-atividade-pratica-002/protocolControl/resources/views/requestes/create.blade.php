@extends('principal')

@section('conteudo')


<div class="wrapper">
    <h3 class="text-center font-weight-bold text-monospace"><p>Novo Requerimento</p></h3>
    <div class="form-group">
        <form method="post" action="{{ route('requestes.store') }}">
            @csrf
            <div class="form-group">            
                {{-- user_id = id do usuário será tratado no método store--}}
                <label>Protocolo:</label><br>
                <select class="form-control" name="subject_id">
                    @foreach($subjects as $s)
                      <option value="{{ $s->id }}"> {{ $s->name }} </option>              
                    @endforeach
                </select>
                
                <label>Selecione um arquivo:</label>                                
                <input class="form-control-file" type="file" name="description">
                
                <label>Data:</label>
                  <input class="form-control" type="date" name="date">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="btnSalvar" style="margin-left: 30%; margin-top: 4px">Incluir</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection