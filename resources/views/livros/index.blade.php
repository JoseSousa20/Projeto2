@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
<ul>
@foreach($livros as $livro)
<li>{{$livro->titulo}}</li>
@endforeach
{{$livros->render()}}
</ul>
@endsection