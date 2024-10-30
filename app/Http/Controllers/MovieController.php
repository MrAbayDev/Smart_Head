<?php

namespace App\Http\Controllers;

use App\Models\Movie;


class MovieController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $movies = Movie::with('genres')->paginate(10);
        return view('movies.index', compact('movies'));
    }
    public function show($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie'));
    }

}
