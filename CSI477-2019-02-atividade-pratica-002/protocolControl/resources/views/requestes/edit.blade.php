@extends('principal')

@section('conteudo')
    
<div class="wrapper">
  <div class="form-group">
    <form method="post" action="{{ route('requestes.update', $requeste->id) }}">
      @csrf
      @method('PATCH')
      <div class="form-group">            
        {{-- user_id = id do usuário será tratado no método store--}}
        <label>Protocolo:</label><br>
        <select class="form-control" name="subject_id">
            @foreach($subjects as $s)
              <option value="{{ $s->id }}" 
                @if ( $s->id == $requeste->subject_id)
                  selected                  
                @endif> {{ $s->name }} </option>              
            @endforeach
        </select>
        
        <label>Selecione um arquivo:</label>                                
      <input class="form-control-file" type="file" name="description">
        
        <label>Data:</label>
        <input class="form-control" type="date" name="date" value="{{$requeste->date}}">

        <div class="form-group wrapper">
            <button class="btn btn-primary" type="submit" name="btnSalvar" style="margin-top: 4px">Salvar</button>

        </div>
      </div>
    </form>
    <div class="wrapper">
        <div class="form-group">
          <form action="{{ route('requestes.destroy', $requeste->id) }}" method="post" onsubmit="return confirm('Confirma a exclusão do protocolo?');">
              @csrf  
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Excluir</button>
          </form>
      </div>
      </div>
  </div>   
</div>
@endsection