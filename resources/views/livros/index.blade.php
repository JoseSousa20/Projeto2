@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
<ul>
@foreach($livros as $livro)
<li>
<a href="{{route('livros.show',['id'=>$livro->id_livro])}}">
{{$livro->titulo}}
</a>
</li>
@endforeach
</ul>
{{$livros->render()}}


<h5>Pesquisar Livros</h5>
<form method="POST" action="{{route('enviado')}}">
@csrf
<label for="pesquisar">Pesquisa:</label>
 <input type="text" name="pesquisar">
    <button type="submit">Enviar</button>
</form>
@endsection