@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
<ul>
@foreach($editoras as $editora)
<li>{{$editora->nome}}</li>
@endforeach
</ul>
@endsection