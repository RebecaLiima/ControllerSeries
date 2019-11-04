@extends('layout')

@section('cabecalho')

@endsection
@section('conteudo')

    <a href="/series/create" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item"><?= $serie; ?></li>
        @endforeach
    </ul>

@endsection
