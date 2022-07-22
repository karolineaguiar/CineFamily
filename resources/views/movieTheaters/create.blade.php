@extends('layouts.app')
@include('layouts.menu')

<div class="container mt-5">
  <h1>Cadastre uma Sala de cinema</h1>
  <hr>
    <form action="{{ route('movieTheaters-store')}}" method="POST">
      @csrf
        <div class="form-group">
          <div class="form-group">
              <label for="name">Nome:</label>
              <input type="text" class="form-control" name="name" placeholder="Digite o nome de um cinema...">
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