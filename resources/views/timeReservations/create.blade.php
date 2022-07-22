@extends('layouts.app')
@include('layouts.menu')

<div class="container mt-5">
    <h1>Faça uma reserva</h1>
    <hr>
        <form action="{{ route('timeReservations-store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="date">Data:</label>
                        <input type="text" class="form-control" name="date" placeholder="Digite uma data...">
                    </div>
                        <br>
                    <div class="form-group">
                        <label for="time"> Horário:</label>
                        <input type="int" class="form-control" name="time" placeholder="Digite o horário...">
                    </div>
                        <br>
                    <div class="form-group">
                        <label for="movie_id">Filme</label>
                        <select class="form-control" name="movie_id" required>
                            @foreach($movies as $movie)
                                <option value="{{$movie->id}}">{{$movie->name}} </option>
                            @endforeach
                        </select>
                    </div>
                        <br>
                    <div class="form-group">
                        <label for="movie_theater_id">Sala</label>
                        <select class="form-control" name="movie_theater_id" required>
                            @foreach($movieTheaters as $movieTheater)
                                <option value="{{$movieTheater->id}}">{{$movieTheater->name}} </option>
                            @endforeach
                        </select>
                    </div>
                        <br>
                    <div class="form-group">
                        <label for="cine_id">Cinema</label>
                        <select class="form-control" name="cine_id" required>
                            @foreach($cines as $cine)
                                <option value="{{$cine->id}}">{{$cine->name}} </option>
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