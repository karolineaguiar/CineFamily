<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use App\Models\Cine;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::all();
        $cines = Cine::all();
        return view('movies.create', compact ('genres', 'cines'));
    }

    public function store(Request $request)
    {
        Movie::create($request-> all());
        return redirect()->route('movies-index');
    }

     public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $genres = Genre::all();
        $cines = Cine::all();

        return view('movies.edit', compact('movie', 'genres','cines'));
    }

    public function update(Request $request, $id)
    {
            $data = [
                 'name' => $request->name,
                 'age_classification'=>$request->age_classification,
                 'duration'=>$request->duration,
                  
            ];
            Movie::where('id',$id)->update($data);
            return redirect()->route('movies-index');
        }
    public function destroy($id)
    {
        Movie::where('id',$id)->delete();
        return redirect()->route('movies-index');
    }
}