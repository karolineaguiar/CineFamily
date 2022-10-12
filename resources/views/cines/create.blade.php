@extends('layouts.app')

@section('content')

   <div class="container mt-5">
      <h1>Cadastre um Cinema</h1>
      <hr>
      <form action="{{ route('cines-store')}}" method="POST">
         @csrf
         <div class="form-group">
            <div class="form-group">
               <label for="name">Nome:</label>
               <input type="text" class="form-control" name="name" placeholder="Digite o nome de um cinema...">
            </div>
            <br>
            <div class="form-group">
               <input type="submit" name="submit" class="btn btn-primary" >
            </div>
         </div>
      </form>
   </div>

@endsection
