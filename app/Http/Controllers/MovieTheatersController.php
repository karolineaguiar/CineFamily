<?php

namespace App\Http\Controllers;

use App\Models\MovieTheater;
use App\Models\Cine;
use Illuminate\Http\Request;

class MovieTheatersController extends Controller
{
    public function index()
    {
        $movieTheaters = MovieTheater::all();
        $cines = Cine::all();
        return view('movieTheaters.index', compact('movieTheaters','cines'));
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