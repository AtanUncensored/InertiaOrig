<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    public function index() {
        
        return inertia('Movies',[
            'movies' => Movie::orderBy('title')->get(),
            'genres' => Genre::orderBy('name')->get()
        ]);
    }

    public function create() {
        return inertia('Create', [
            'genres' => Genre::orderBy('name')->get()
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'director' => 'required|string',
            'description' => 'required|string',
            'genre_id' => 'required',
            'release_date' => 'required|date'
        ]);
    
        Movie::create($validatedData);
    
        return redirect('/movies');
    }
    
    
    public function edit(Movie $movie) {
        $genres = Genre::all(); 
        return inertia('Edit', ['movie' => $movie, 'genres' => $genres]);
    }
    

    public function update(Request $request, Movie $movie) {
        $fields = $request->validate([
            'title' => 'required',
            'director' => 'required',
            'genre_id' => 'required',
            'description' => 'required',
            'release_date' => 'required'
        ]);

        $movie->update($fields);

        return redirect('/movies');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/movies')->with('success', 'Movie deleted successfully');
    }
}
