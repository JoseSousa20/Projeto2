@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
ID:{{$autores->id_autor}}<br>
Nome:{{$autores->nome}}<br>
Nacionalidade:{{$autores->nacionalidade}}<br>
Data de Nascimento:{{$autores->data_nascimento}}<br>
Fotografia:{{$autores->fotografia}}
@endsection