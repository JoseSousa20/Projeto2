@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
<ul>
@foreach($editoras as $editora)
<li>
<a href="{{route('editoras.show',['id'=>$editora->id_editora])}}">
{{$editora->nome}}
</li>
@endforeach
</ul>
@endsection