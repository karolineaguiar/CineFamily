@extends('layouts.app')

@section('content') 
  
<div class="card-header">
    @foreach ($movies as $genres => $movie)
        <h4>{{$genres}}</h4>
        <table class="table mt-3">
            <tr>
                <th>nome</th>
            </tr>
            @foreach ($movie as $m )
                <tr>
                    <td>{{ $m->name }}</td>
                </tr>
            @endforeach
        </table>
    @endforeach
</div>
@endsection
