<?php

namespace App\Http\Controllers;

use App\Models\TimeReservation;
use App\Models\Movie;
use App\Models\Cine;
use App\Models\MovieTheater;
use Illuminate\Http\Request;

class TimesReservationsController extends Controller
{
    public function index()
    {
        $timeReservations = TimeReservation::all();
        $movies = Movie::all();
        $cines = Cine::all();
        $timeReservationss = TimeReservation::all()->groupBy('cine.name');
        $movieTheaters = MovieTheater::all();
        $manha = TimeReservation::where(('time'), '<', '12:00:00')->get();
        $tarde = TimeReservation::where(('time'), '>=', '12:00:00')->get();


        return view('timeReservations.index', compact('timeReservations', 'movieTheaters', 'movies', 'cines','manha', 'tarde','timeReservationss' ));
    }

    public function create()
    {
        $movieTheaters = MovieTheater::all();
        $movies = Movie::all();
        $cines = Cine::all();

        return view('timeReservations.create', compact ('cines','movies','movieTheaters'));
    }

    public function store(Request $request)
    {
        TimeReservation::create($request-> all());

        return redirect()->route('timeReservations-index');
    }

     public function edit($id)
    {
        $timeReservation = TimeReservation::findOrFail($id);
        $movieTheaters = MovieTheater::all();
        $movies = Movie::all();
        $cines = Cine::all();

        return view('timeReservations.edit', compact('timeReservation','movieTheaters', 'movies','cines'));
    }

    public function update(Request $request, $id)
    {
        $data = [
             'date' => $request->date,
             'time'=>$request->time,
        ];
        TimeReservation::where('id',$id)->update($data);
        return redirect()->route('timeReservations-index');
    }

              
    public function destroy($id)
    {
        TimeReservation::where('id',$id)->delete();
        return redirect()->route('timeReservations-index');
    }
}