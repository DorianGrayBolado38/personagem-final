@extends('layout')

@section('content')

<h1>Lista de Personagens</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="mb-3">
    <label for="search" class="form-label">Pesquise o Cadastro de Personagens</label>
    <input type="text" class="form-control" id="search" name="search" required>
    <a type="button" class="btn btn-outline-primary">Pesquisar</a>
</div>

<div class="card-container">
    @foreach($registrosPersonagem as $personagem)
        <div class="card">
            <img src="{{ asset('storage/' . $personagem->imgPersonagem) }}" alt="{{ $personagem->nomePersonagem }}" class="card-img" data-toggle="modal" data-target="#modal-{{ $personagem->id }}">
            <div class="card-body">
                <h3 class="card-title">{{ $personagem->nomePersonagem }}</h3>
                <p class="card-text">Data de Criação: {{ $personagem->dataPersonagem }}</p>
                <p class="card-text">Obra: {{ $personagem->obraPersonagem }}</p>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-{{ $personagem->id }}" tabindex="-1" role="dialog" aria-labelledby="modalLabel-{{ $personagem->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel-{{ $personagem->id }}">{{ $personagem->nomePersonagem }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('storage/' . $personagem->imgPersonagem) }}" alt="{{ $personagem->nomePersonagem }}" class="img-fluid">
                        <p>Data de Criação: {{ $personagem->dataPersonagem }}</p>
                        <p>Obra: {{ $personagem->obraPersonagem }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<table class="table table-dark mt-4">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Personagem</th>
            <th scope="col">Data</th>
            <th scope="col">Local</th>
            <th scope="col">Alterar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registrosPersonagem as $personagem)
        <tr>
            <th scope="row">{{ $personagem->idPersonagem }}</th>
            <td>{{ $personagem->nomePersonagem }}</td>
            <td>{{ $personagem->dataPersonagem }}</td>
            <td>{{ $personagem->local }}</td>
            <td>
                <a href="{{ route('show-altera-personagem', ['id' => $personagem->idPersonagem]) }}" class="btn btn-outline-primary bi bi-pen"></a>
            </td>
            <td>
                <form method="POST" action="{{ route('apagar-personagem', ['id' => $personagem->idPersonagem]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este personagem?')">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
}

.card {
    border: 1px solid #fff;
    border-radius: 10px;
    width: 200px; 
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.card-img {
    width: 100%;
    height: auto;
    cursor: pointer;
}
</style>

@endsection
