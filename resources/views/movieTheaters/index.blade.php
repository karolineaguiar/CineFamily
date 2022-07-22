@extends('layouts.app')
@include('layouts.menu')

<div class="card-header">
    <div class="container mt-5">
        <div class="row">
            <div class="col-10">
                <h1>Listagem de Salas de Cinema</h1>
            </div>
            <div style="text-align:right">
                <a href="{{ route('movieTheaters-create')}}"class="btn btn-success"> Cadastro de Salas</a>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cinema</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($movieTheaters as $movieTheater)
                        <tr>
                            <th>{{ $movieTheater->id }}</th>
                            <th>{{ $movieTheater->name }}</th>
                            <th>{{ $movieTheater->cine->name }}</th>
                            <th>
                                <div class="btn-group">
                                    <a href="{{ route('movieTheaters-edit', ['id'=> $movieTheater->id]) }}" class="btn btn-secondary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a onclick="event.preventDefault(); document.getElementById('movieTheaters-destroy-form-{{$movieTheater->id}}').submit()" class="btn btn-danger">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                    <form id="movieTheaters-destroy-form-{{$movieTheater->id}}" action="{{ route('movieTheaters-destroy', ['id'=> $movieTheater->id]) }}" method="POST" style="display: none;">
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
