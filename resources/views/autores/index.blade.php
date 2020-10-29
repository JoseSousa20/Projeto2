@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
<ul>
@foreach($autores as $autor)
<li>{{$autor->nome}}</li>
@endforeach
</ul>
@endsection
