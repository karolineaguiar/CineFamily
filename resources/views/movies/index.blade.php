@extends('layouts.app')

@section('content')    
  
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

    
    <div class="row">
        <div class="container mt-5">
            <div class="col-10">
                <h2>Ordem Crescente</h2>
            </div>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Classificação Indicativa</th>
                        <th scope="col">Tempo de duração</th>
                        <th scope="col">Gênero</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($asc as $movie)
                        <tr>
                            <th>{{ $movie->id }}</th>
                            <th>{{ $movie->name }}</th>
                            <th>{{ $movie->age_classification }}</th>
                            <th>{{ $movie->duration }}</th>
                            <th>{{ $movie->genre->name}}</th>
                            <th>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        <div>   
    </div>

    
    <div class="row">
        <div class="container mt-5">
            <div class="col-10">
                <h3>Ordem Decrescente</h3>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Classificação Indicativa</th>
                        <th scope="col">Tempo de duração</th>
                        <th scope="col">Gênero</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($desc as $movie)
                        <tr>
                            <th>{{ $movie->id }}</th>
                            <th>{{ $movie->name }}</th>
                            <th>{{ $movie->age_classification }}</th>
                            <th>{{ $movie->duration }}</th>
                            <th>{{ $movie->genre->name}}</th>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        <div>   
    </div>

    <div class="row">
        <div class="container mt-5">
            <div class="col-10">
                <h3>Todos os filmes com classificação ate 14 anos</h3>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Gênero</th>
                        <th scope="col">Filme</th>
                        <th scope="col">Classificação Indicativa</th>
                        <th scope="col">Tempo de duração</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($age as $movie)
                        <tr>
                            <th>{{ $movie->genre->name}}</th>
                            <th>{{ $movie->name }}</th>                            
                            <th>{{ $movie->age_classification }}</th>
                            <th>{{ $movie->duration }}</th>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        <div>   
    </div>

    <div class="row">
        <div class="container mt-5">
            <div class="col-10">
                <h3>Todos os filme com 120 minutos de duracao (2 hrs)</h3>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Gênero</th>
                        <th scope="col">Filme</th>
                        <th scope="col">Classificação Indicativa</th>
                        <th scope="col">Tempo de duração</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($duration as $movie)
                        <tr>
                            <th>{{ $movie->genre->name}}</th>
                            <th>{{ $movie->name }}</th>                            
                            <th>{{ $movie->age_classification }}</th>
                            <th>{{ $movie->duration }}</th>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        <div>   
    </div>

    
  <div class="row">
        <div class="container mt-5">
            <div class="col-10">
                <h3>Todos os filme menos terror</h3>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Filme</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($terror as $movie)
                        <tr>
                            <th>{{ $movie->id }}</th>
                            <th>{{ $movie->genre->name}}</th>
                            <th>{{ $movie->name }}</th>                            
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        <div>   
    </div> 

    
    
    
@endsection
