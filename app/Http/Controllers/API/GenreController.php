<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        $genre = Genre::findOrFail($id);
        $movies = $genre->movies()->paginate(10);

        return response()->json([
            'genre' => $genre,
            'movies' => $movies
        ]);
    }
}
