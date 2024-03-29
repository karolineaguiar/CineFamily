@extends('layouts.app')

@section('content')

    <div class="card mt-5">
        <div class="card-body">
            <form class="d-flex" action="{{ route('cines-search') }}" method="GET">
                <input name="name" class="form-control me-2" type="text" placeholder="Pesquise um Filme" value="{{ $_GET['name'] ?? '' }}">
                <button class="btn btn-outline-success" type="submit">
                  Buscar
                </button>
                <a class="btn btn-outline-warning" href="{{ route('cines-index') }}">
                    Limpar
                </a> 
            </form>
        </div>
    </div>

    <div class="card mt-5">
        <div class="container">
            <div class="col">
                <div class="btn-group">
                </div>
                <div class="col-10">
                    <h1>Listagem de Cinemas</h1>
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">...</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach($cines as $cine)
                            <tr>
                                <th>{{ $cine->id }}</th>
                                <th>{{ $cine->name }}</th>
                                <th>
                                    <div class="btn-group">
                                        <a href="{{ route('cines-edit', ['id'=> $cine->id]) }}" class="btn btn-secondary">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="event.preventDefault(); document.getElementById('cines-destroy-form-{{$cine->id}}').submit()" class="btn btn-danger">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                        <form id="cines-destroy-form-{{$cine->id}}" action="{{ route('cines-destroy', ['id'=> $cine->id]) }}" method="POST" style="display: none;">
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

@endsection