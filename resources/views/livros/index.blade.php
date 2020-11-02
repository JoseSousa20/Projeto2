@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
<ul>
@foreach($livros as $livro)
<li>
<a href="{{route('livros.show',['id'=>$livro->idl])}}">
{{$livro->titulo}}
</a>
</li>
@endforeach
</ul>
{{$livros->render()}}
@endsection