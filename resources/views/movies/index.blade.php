@extends('layouts.app')
@include('layouts.menu')

<div class="card-header">
    <div class="container mt-5">
        <div class="row">
            <div class="col-10">
                <h1>Listagem de Filmes</h1>
            </div>
                <div style="text-align:right">
                    <a href="{{ route('movies-create')}}"class="btn btn-success"> Cadastro de Filmes</a>
                </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Classificação Indicativa</th>
                        <th scope="col">Tempo de duração</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Cinema</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($movies as $movie)
                        <tr>
                            <th>{{ $movie->id }}</th>
                            <th>{{ $movie->name }}</th>
                            <th>{{ $movie->age_classification }}</th>
                            <th>{{ $movie->duration }}</th>
                            <th>{{ $movie->genre->name}}</th>
                            <th>{{ $movie->cine->name }}</th>
                            <th>
                                <div class="btn-group"> 
                                    <a href="{{ route('movies-edit', ['id'=> $movie->id]) }}" class="btn btn-secondary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a onclick="event.preventDefault(); document.getElementById('movies-destroy-form-{{$movie->id}}').submit()" class="btn btn-danger">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                    <form id ="movies-destroy-form-{{$movie->id}}" action="{{route ('movies-destroy', ['id'=>$movie->id]) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </th>
                        </tr>
                    @endforeach       
                </tbody>
            </table>
        </div>    
    </div>
</div>
