@extends('layouts.app')

@section('content')

   <div class="container mt-5">
      <h1>Atualize um cinema</h1>
         <hr>
         <form action="{{ route('cines-update',['id'=>$cine->id]) }}" method="POST">
            @csrf
            @method('PUT')
               <div class="form-group">
                  <div class="form-group">
                     <label for="name">Nome:</label>
                     <input type="text" class="form-control" name="name" value="{{$cine->name}}" placeholder="Digite o nome de um filme...">
                  </div>
                     <br>
                  <div class="form-group">
                     <input type="submit" name="submit" class="btn btn-success" value="Atualizar" >
                  </div>
               </div>
         </form>
   </div>

@endsection