@extends('layouts.app')
@include('layouts.menu')

<div class="container mt-5">
    <h1>Atualize o horario de reserva</h1>
    <hr>
    <form action="{{ route('timeReservations-update',['id'=>$timeReservation->id]) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
           <div class="form-group">
                <label for="date">Data:</label>
                <input type="text" class="form-control" name="date" value="{{$timeReservation->date}}">
           </div>
    <br>
        <div class="form-group">
            <label for="time"> Horário:</label>
            <input type="int" class="form-control" name="time" value="{{$timeReservation->time}}">
       </div>
    <br>
        <div class="form-group"> <div class="form-group">
            <label for="movie_id">Filme:</label>
            <input type="int" class="form-control" name="movie_id" value="{{$timeReservation->movie->name}}">
        </div>
    <br>
        <div class="form-group">
            <label for="movie_theater_id">Sala:</label>
            <input type="text" class="form-control" name="movie_theater_id" value="{{$timeReservation->movieTheater->name}}">
        </div>
    <br>
        <div class="form-group">
            <label for="cine_id">Cinema:</label>
            <input type="text" class="form-control" name="cine_id" value="{{$timeReservation->cine->name}}">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Atualizar" >
           </div>
        </div>
    </form>
    </div>
    
    