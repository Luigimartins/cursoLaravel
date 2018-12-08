@extends('layout.site')

@section('titulo','Home')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        

        <div class="row">
        @foreach($cursos as $curso)
            @if($curso->publicado=="sim")
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img height="200" src="{{ asset($curso->imagem) }}">
                  <span class="card-title"></span>
                </div>
                <div class="card-content">
                  <h4>{{$curso->titulo}}</h4>
                  <p>{{$curso->descricao}}</p>
                  @foreach($users as $user)
                    @if($user->id == $curso->user_id)
                      <p>Autor: {{$user->name}}</p>
                    @endif
                  @endforeach  
                </div>
                <div class="card-action">
                  <a href="#">Ver mais</a>
                </div>
              </div>
            </div>
            @endif
        @endforeach 
          </div>
        
    </div>



@endsection