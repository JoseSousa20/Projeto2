@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
ID: {{$livro->id_livro}}<br>
Título: {{$livro->titulo}}<br>
Idioma: {{$livro->idioma}}<br>
Total de Paginas: {{$livro->total_paginas}}<br>
Data de Edição: {{$livro->data_edicao}}<br>
ISBN: {{$livro->isbn}}<br>
Observações: {{$livro->observacoes}}<br>
Imagem: {{$livro->imagem_capa}}<br>
ID Autor: {{$livro->id_autor}}<br>
Sinopse: {{$livro->sinopse}}<br>
@if(isset($livro->genero->designacao))
Género: {{$livro->genero->designacao}}<br>
@else
 <div class="alert alert-danger" role="alert">
<h6>Sem género defenido</h6>
</div>
@endif
@if(isset($livro->autor->nome))
Nome: {{$livro->autor->nome}}<br>
@else
<div class="alert alert-danger " role="alert">
<h6>Nome do Autor não defenido</h6>
</div>
@endif
@foreach($livro->autores as $autor)
{{$autor->nome}}<br>
@endforeach
@foreach($livro->editoras as $editora)
Editora: {{$editora->nome}}<br>
@endforeach
@endsection
