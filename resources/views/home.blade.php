@extends('layout.site')

@section('titulo','Home')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        

        <div class="row">
        @foreach($cursos as $curso)
            
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img height="200" src="{{ asset($curso->imagem) }}">
                  <span class="card-title"></span>
                </div>
                <div class="card-content">
                  <h4>{{$curso->titulo}}</h4>
                  <p>{{$curso->descricao}}</p>
                  
                  <!-- //COM OUTRO FOREACH -->
                   @foreach($users as $user)
                    @if($user->id == $curso->user_id)
                      <p>Autor: {{$user->name}}</p>
                    @endif
                  @endforeach


                  <!-- //SEM OUTRO FOREACH -->
                  <?php 
                    $user = $users->where('id', '=', $curso->user_id);
                    echo $user;

                  ?>

                  


                </div>
                <div class="card-action">
                  <a href="#">Ver mais</a>
                </div>
              </div>
            </div>
            
        @endforeach 
          </div>
        
    </div>



@endsection