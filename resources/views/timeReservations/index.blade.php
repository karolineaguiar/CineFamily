@extends('layouts.app')

@section('content')

<div class="row">
    @foreach ($timeReservationss as $cines => $timeReservation)
        <h4>{{$cines}}</h4>
        <table class="table mt-3">
            <tr>
                <th>filme</th>
                <th>Data</th>
                <th>Horário</th>
            </tr>
                @foreach ($timeReservation as $r )
                        <tr>
                            <td>{{ $r->movie->name }}</td>
                            <td>{{ $r->date }}</td>
                            <td>{{ $r->time }}</td>
                        </tr>
                @endforeach
        </table>
    @endforeach
</div>    

<div class="row">
    <div class="container mt-5">
        <div class="col-10">
            <h3> Reservas para as tardes</h3>
        </div>
        <table class="table mt-5">
            <thead>
                <tr>                    
                    <th scope="col">Filme</th>
                    <th scope="col">Horário</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Cinema</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($tarde as $timeReservation)
                    <tr>
                        <th>{{ $timeReservation->movie->name }}</th>
                        <th>{{ $timeReservation->time }}</th>
                        <th>{{ $timeReservation->movieTheater->name }}</th>
                        <th>{{ $timeReservation->cine->name }}</th>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    <div>   
</div>  


<div class="row">
    <div class="container mt-5">
        <div class="col-10">
            <h3> Reservas para as manhãs</h3>
        </div>
        <table class="table mt-5">
            <thead>
                <tr>                    
                    <th scope="col">Filme</th>
                    <th scope="col">Horário</th>
                    <th scope="col">Sala</th>
                    <th scope="col">Cinema</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($manha as $timeReservation)
                    <tr>
                        <th>{{ $timeReservation->movie->name }}</th>
                        <th>{{ $timeReservation->time }}</th>
                        <th>{{ $timeReservation->movieTheater->name }}</th>
                        <th>{{ $timeReservation->cine->name }}</th>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    <div>   
</div> 

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

@endsection