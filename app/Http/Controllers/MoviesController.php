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
        $genres = Genre::all();
        $asc = Movie::orderBy('name',  'ASC')->get();
        $desc = Movie::orderBy('name', 'DESC')->get();
        $age = Movie::where('age_classification','<', 14)->get();
        $duration = Movie::where(('duration'), '=', '02:00:00')->get();
        $terror = Movie::where(('genre_id'), '!=', 4)->get(); 
        return view('movies.index', compact('movies', 'genres','asc', 'desc','age', 'duration', 'terror' ));
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


        // $order = $this->request->get('order', 'ASC');
        // $by = $this->request->get('by', 'name');
        // $listsAsc = $this->listAsc->orderBy($by, $order)->paginate();