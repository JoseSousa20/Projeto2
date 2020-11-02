@extends('layout')
@section('titulo')
@endsection
@section('header')
@endsection
@section('conteudo')
<ul>
@foreach($generos as $genero)
<li>
<a href="{{route('generos.show',['id'=>$genero->idg])}}">
{{$genero->designacao}}
</a>
</li>
@endforeach
</ul>
@endsection