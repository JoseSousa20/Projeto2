@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
IDG: {{$generos->id_genero}}<br>
Designação: {{$generos->designacao}}<br>
Observações: {{$generos->observacoes}}<br>
@if(count($generos->livros))
Livros:
    @foreach($generos->livros as $livro)
    <h6>{{$livro->titulo}}</h6>
    @endforeach
@else
    <div class="alert alert-danger " role="alert">
    Neste género ainda não há livros!
    </div>
@endif
@endsection