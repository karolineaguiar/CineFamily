@extends('layouts.app')
@include('layouts.menu')

<div class="container mt-5">
    <h1>Atualize um filme</h1>
    <hr>
    <form action="{{ route('movies-update',['id'=>$movie->id]) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
           <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" value="{{$movie->name}}">
           </div>
    <br>
        <div class="form-group">
            <label for="age_classification">Classificação indicativa:</label>
            <input type="int" class="form-control" name="age_classification" value="{{$movie->age_classification}}">
       </div>
    <br>
        <div class="form-group"> <div class="form-group">
            <label for="duration">Tempo de duração:</label>
            <input type="int" class="form-control" name="duration" value="{{$movie->duration}}">
        </div>
    <br>
        <div class="form-group">
            <label for="genre_id">Gênero:</label>
            <input type="text" class="form-control" name="genre_id" value="{{$movie->genre->name}}">
        </div>
    <br>
        <div class="form-group">
            <label for="cine_id">Cinema:</label>
            <input type="text" class="form-control" name="cine_id" value="{{$movie->cine->name}}">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Atualizar" >
           </div>
        </div>
    </form>
    </div>
    
    