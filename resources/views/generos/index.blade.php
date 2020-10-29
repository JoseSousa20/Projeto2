@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
<ul>
@foreach($generos as $genero)
<li>{{$genero->designacao}}</li>
@endforeach
</ul>
@endsection