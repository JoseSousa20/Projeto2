@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
ID: {{$editoras->id_editora}}<br>
Nome: {{$editoras->nome}}<br>
Morada: {{$editoras->morada}}<br>
Observações: {{$editoras->observacoes}}<br>
@if(count($editoras->livros))
Livros:
    @foreach($editoras->livros as $livro)
    {{$livro->titulo}}<br>
    @endforeach
@else
    <div class="alert alert-danger " role="alert">
    Nesta Editora ainda não há livros!
    </div>
@endif
@endsection