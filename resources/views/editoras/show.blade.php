@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
ID: {{$editoras->id_editora}}<br>
Nome: {{$editoras->nome}}<br>
Morada: {{$editoras->morada}}<br>
Observações: {{$editoras->observacoes}}
@endsection