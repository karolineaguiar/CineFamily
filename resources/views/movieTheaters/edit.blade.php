@extends('layouts.app')
@include('layouts.menu')

<div class="container mt-5">
    <h1>Atualize uma Sala de cinema</h1>
    <hr>
        <form action="{{ route('movieTheaters-update',['id'=>$movieTheater->id]) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" value="{{$movieTheater->name}}">
                    </div>
                        <br>
                    <div class="form-group">
                        <label for="cine_id">Cinema:</label>
                        <input type="text" class="form-control" name="cine_id" value="{{$movieTheater->cine_id}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-success" value="Atualizar" >
                    </div>
                </div>
        </form>
</div>   