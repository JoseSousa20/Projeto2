@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
ID:{{$livro->idl}}<br>
Título:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}
@endsection