@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h1>Cadastre um Filme</h1>
        <hr>
            <form action="{{ route('movies-store')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" name="name" placeholder="Digite o nome de um filme...">
                        </div>
                            <br>
                        <div class="form-group">
                            <label for="age_classification">Classificação indicativa:</label>
                            <input type="int" class="form-control" name="age_classification" placeholder="Digite a classificação indicativa...">
                        </div>
                            <br>
                        <div class="form-group">
                            <label for="duration">Tempo de duração :</label>
                            <input type="int" class="form-control" name="duration" placeholder="Digite o tempo de duração...">
                        </div>
                            <br>
                        <div class="form-group">
                            <label for="genre_id">Gênero</label>
                            <select class="form-control" name="genre_id" required>
                                @foreach($genres as $genre)
                                    <option value="{{$genre->id}}">{{$genre->name}} </option>
                                @endforeach
                            </select>
                        </div>
                            <br>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" >
                        </div>
                    </div>
            </form>
    </div>

@endsection