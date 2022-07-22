@extends('layouts.app')
@include('layouts.menu')

<div class="card-header">
    <div class="container mt-5">
        <div class="row">
            <div class="col-10">
                <h1>Listagem de Reservas Disponíveis</h1>
            </div>
            <div style="text-align:right">
                <a href="{{ route('timeReservations-create')}}"class="btn btn-success"> Cadastro de Reservas</a>
            </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Data</th>
                            <th scope="col">Horário</th>
                            <th scope="col">Filme</th>
                            <th scope="col">Sala</th>
                            <th scope="col">Cinema</th>
                            <th scope="col">...</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach($timeReservations as $timeReservation)
                            <tr>
                                <th>{{ $timeReservation->id }}</th>
                                <th>{{ $timeReservation->date }}</th>
                                <th>{{ $timeReservation->time }}</th>
                                <th>{{ $timeReservation->movie->name }}</th>
                                <th>{{ $timeReservation->movieTheater->name }}</th>
                                <th>{{ $timeReservation->cine->name }}</th>
                                <th>
                                    <div class="btn-group">
                                        <a href="{{ route('timeReservations-edit', ['id'=> $timeReservation->id]) }}" class="btn btn-secondary">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="event.preventDefault(); document.getElementById('timeReservations-destroy-form-{{$timeReservation->id}}').submit()" class="btn btn-danger">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                        <form id="timeReservations-destroy-form-{{$timeReservation->id}}" action="{{ route('timeReservations-destroy', ['id'=> $timeReservation->id]) }}" method="POST" style="display: none;">
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


