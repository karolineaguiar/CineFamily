<?php

namespace App\Http\Controllers;

use App\Models\MovieTheater;
use App\Models\Cine;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieTheatersController extends Controller
{
    public function index()
    {
        $cines = Cine::all();
        $movieTheaters = MovieTheater::all();
        $movieTheaterss = MovieTheater::all()->groupBy('cine.name');

        return view('movieTheaters.index', compact('cines','movieTheaters','movieTheaterss'));
    }

    public function search(Request $request)
    {
        $name = $request->name;
        $cine = Cine::where('name', 'like', "%$name%")->first();
        $movieTheaters = $cine-> movieTheater;
        return view('movies.index', compact('movieTheaters'));
    }


    public function create()
    {
        $cines = Cine::all();
        return view('movieTheaters.create', compact('cines'));
    }

    public function store(Request $request)
    {
        MovieTheater::create($request-> all());
        return redirect()->route('movieTheaters-index');
    }

     public function edit($id)
    {
        $movieTheater = MovieTheater::findOrFail($id);
        $cines = Cine::all();

        return view('movieTheaters.edit', compact('movieTheater','cines'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'cine_id'=>$request->cine_id,
        ];
        MovieTheater::where('id',$id)->update($data);
       return redirect()->route('movieTheaters-index');
    }

    public function destroy($id)
    {
        MovieTheater::where('id',$id)->delete();
        return redirect()->route('movieTheaters-index');
    }
}