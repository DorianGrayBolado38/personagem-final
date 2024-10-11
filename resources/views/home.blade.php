@extends('layout')
@section('content')

<div class="card bg-dark text-white text-center">
  <img src="{{ asset('assets/imagens/home.png') }}" class="img-display" alt="card image">
  <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit distinctio alias expedita sint qui dolores nam veniam, dolor id reprehenderit, cupiditate architecto accusantium tempore recusandae eaque rerum asperiores, sequi optio!</p>
    <p class="card-text">Last updated 3 mins ago</p>
    <a href="{{route('cadastro-personagem')}}" class="btn btn-outline-primary">Cadastrar</a>
  </div>
</div>

<style>
   .img-display {
       width: auto; /* Ajuste a largura desejada */
       height: auto; /* Mantém a proporção da imagem */
       object-fit: cover; /* Corta a imagem se necessário */
   }
   .card{
    width: auto; /* Ajuste a largura desejada */
       height: auto; /* Mantém a proporção da imagem */
       object-fit: cover; /* Corta a imagem se necessário */
   }

   .card-text {
       font-size: 30px; /* Ajuste o tamanho da fonte conforme necessário */
   }
</style>

@endsection
