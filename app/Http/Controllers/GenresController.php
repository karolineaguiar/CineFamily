<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        $movies = Movie::all()->groupBy('genre.name');
        return view('genres.index', compact('genres','movies'));
    }
    
   
}