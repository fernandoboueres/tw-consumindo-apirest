@extends('layouts.base')

@section('conteudo')
    <h1>Lista de Repositorios do GitHub</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">URL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($repositorios as $repositorio)
                <tr>
                    <th scope="row">{{ $repositorio['id'] }}</th>
                    <td>{{ $repositorio['name'] }}</td>
                    <td>{{ $repositorio['url'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
