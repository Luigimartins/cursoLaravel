@extends('layout.site')

@section('titulo','Ver mais')

@section('conteudo')

	<div class="ui container">
		<h2>{{ $curso->titulo }} - {{ $curso->descricao }}</h2>
		<br>
		<img height="300" src="{{ asset($curso->imagem) }}">
		<h4><strong>Preço: R$ {{ $curso->valor }}</strong></h4>

		<a class="waves-effect waves-light btn" href="{{ route('site.home') }}">Voltar</a>
	</div>

@endsection