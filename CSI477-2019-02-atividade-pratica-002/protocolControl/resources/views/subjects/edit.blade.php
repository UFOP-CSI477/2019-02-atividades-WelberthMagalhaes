@extends('principal')

@section('conteudo')
    
<div class="form-group">
  <form method="post" action="{{ route('subjects.update', $subject->id) }}">
    @csrf
    @method('PATCH')
    <div class="form-group">        
        <label>Nome: <input class="form-control" type="text" name="name" value="{{ $subject->name }}"></label><br>
        <label>Preço: <input class="form-control" type="text" name="price" value="{{ $subject->price }}"></label><br>    
        <br>
        <div class="form-group">
            <button class="btn btn-primary" name="btnSalvar" type="submit">Salvar</button>
        </div>    
    </div>
  </form>
</div>

<div class="form-group">
    <form action="{{ route('subjects.destroy', $subject->id) }}" method="post" onsubmit="return confirm('Confirma a exclusão do protocolo?');">
        @csrf  
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Excluir</button>
    </form>
</div>

</div>
@endsection