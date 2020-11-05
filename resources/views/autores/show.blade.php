@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
ID: {{$autores->id_autor}}<br>
Nome: {{$autores->nome}}<br>
Nacionalidade: {{$autores->nacionalidade}}<br>
Data de Nascimento: {{$autores->data_nascimento}}<br>
Fotografia: {{$autores->fotografia}}<br>
@if(count($autores->livros))
Livros: 
    @foreach($autores->livros as $livro)
    <h6>{{$livro->titulo}}</h6>
    @endforeach
@else
    <div class="alert alert-danger " role="alert">
    Neste Autor ainda não há livros!
    </div>
@endif
@endsection