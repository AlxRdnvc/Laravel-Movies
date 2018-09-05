<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movies= Movie::findOrFail($id);
        return view('movies.show', compact('movies'));
    }

    public function create()
    {
        return view("movies.create");
    }

    public function store(Request $request)
    {


            $request->validate([
                'title' => 'required',
                'genre' => 'required',
                'director' => 'required',
                'year' => 'nullable |integer | between: 1900,'.date('Y'),
                'storyline' => 'required|max:1000'
            ]);

            Movie::create([
                'title' => request('title'),
                'genre' => request('genre'),
                'director' => request('director'),
                'year' => request('year'),
                'storyline' => request('storyline')
            ]);

            
            return redirect("/movies");
    }
}
