@extends('principal')

@section('conteudo')
<table class="table table-striped table-bordered">
   <thead class="table-light">
     <tr>
       <th>Código</th>
       <th>Nome</th>
       <th>Preço</th>
     </tr>
   </thead>
   <tbody>
 @foreach($subjects as $s)
     <tr>
       <td>{{ $s->id }}</td>
       <td>{{ $s->name }}</td>
       <td>{{ $s->price }}</td>
     </tr>
 @endforeach
   </tbody>
 </table>
@endsection
