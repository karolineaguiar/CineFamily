<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use App\Models\Movie;
use Illuminate\Http\Request;

class CinesController extends Controller
{
    public function index()
    {
        $cines = Cine::all();
        return view('cines.index', compact('cines'));
    }

    public function search(Request $request)
    {
        $name = $request->name;

        $movie = Movie::where('name', 'like', "%$name%")->first();

        $cines = $movie-> cines;

        return view('cines.index', compact('cines'));
    }

    public function create()
    {
        return view('cines.create');
    }

    public function store(Request $request)
    {
        Cine::create($request-> all());
        return redirect()->route('cines-index');
    }

    public function edit($id)
    {
        $cine = Cine::findOrFail($id);
        return view('cines.edit', compact('cine'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,     
        ];
        Cine::where('id',$id)->update($data);
        return redirect()->route('cines-index');
    }

    public function destroy($id)
    {
        Cine::where('id',$id)->delete();
        return redirect()->route('cines-index');
    }
}