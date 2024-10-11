@extends('layout')
@section('content')
 
 
<div class="container">
</div>
<div class="card bg-dark text-white">
    <div class="card-img-overlay">
    <img class="card-img" src="{{ asset('asset/imagens/home.png') }}" alt="Card image">

        <h2 class="card-title">Cadastro de personagens</h5>
        <p class="card-text">A única finalidade do sistema é essa, registrar e armazenar as informações do personagem</p>
        <p class="card-text">imagem:DoryanGrayBolado38</p>
        <a href="{{route('cadastro-personagem')}}" class="btn btn-outline-primary">Cadastrar</a>
       

    </div>
</div>

<style>


    
   .img-display{
    justify-content: right;
    height: 900px;
    width: 900px;
   }
</style>
@endsection
