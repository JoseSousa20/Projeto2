@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
ID:{{$livro->id_livro}}<br>
Título:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}<br>
Total de Paginas:{{$livro->total_paginas}}<br>
Data de Edição:{{$livro->data_edicao}}<br>
ISBN:{{$livro->isbn}}<br>
Observações:{{$livro->observacoes}}<br>
Imagem:{{$livro->imagem_capa}}<br>
ID Genero:{{$livro->id_genero}}<br>
ID Autor:{{$livro->id_autor}}<br>
Sinopse:{{$livro->sinopse}}
@endsection