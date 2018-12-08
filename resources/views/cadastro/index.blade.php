@extends('layout.site')

@section('titulo','Cadastrar')

@section('conteudo')
	<div class="container">
		<h3 class="center">Cadastrar</h3>
		<div class="row">
			<form class="" action="{{ route('site.cadastrar.salvar') }}" method="post">
				{{ csrf_field() }}
				<div class="input-field">
					<input type="text" name="name">
					<label>Nome:</label>
					
				</div>

				<div class="input-field">
					<input type="text" name="email">
					<label>E-mail:</label>
				</div>
				
				<div class="input-field">
					<input type="password" name="password">
					<label>Senha:</label>
				</div>			

				<button class="btn deep-orange">Entrar</button>	
			</form>
				
		</div>
	</div>



@endsection