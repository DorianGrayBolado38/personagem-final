@extends('layout')
@section('content')

<div class="container">
    <h2 class="card-title">Aqui você vai registrar seus personagens</h2>

    <form action="{{ route('cadastrar-personagem') }}" method="POST" enctype="multipart/form-data" class="formulario">
        @csrf <!-- Protege contra CSRF, necessário no Laravel -->

        <div class="mb-3">
            <label for="nomePersonagem" class="form-label">Nome do Personagem:</label>
            <input type="text" id="nomePersonagem" name="nomePersonagem" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="dataPersonagem" class="form-label">Data de Criação:</label>
            <input type="date" id="dataPersonagem" name="dataPersonagem" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="obraPersonagem" class="form-label">Obra do Personagem:</label>
            <input type="text" id="obraPersonagem" name="obraPersonagem" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="imgPersonagem" class="form-label">Imagem do Personagem:</label>
            <input type="file" id="imgPersonagem" name="imgPersonagem" accept="image/*" class="form-control" required>
        </div>

        <button type="submit">Cadastrar Personagem</button>
    </form>
</div>

<style>
    label {
        color: black;
    }

    .formulario {
        padding: 20px;
        border: 5px solid black; /* Ajuste a largura e a cor da borda */
        border-radius: 10px; /* Arredonda os cantos da borda */
        background-color: #f8f9fa; /* Cor de fundo do formulário */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
    }
    button:hover {
        color: #8b5742;
        background-color: black;
        transition
    }
    
    button {
        color: black;
        background-color:#69483b;
        border-color:#69483b;
        transition: background-color 0.3s, color 0.3s;
    }

</style>

@endsection
