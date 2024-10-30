<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $movies = Movie::with('genres')->paginate(10);
        return response()->json($movies);
    }
    public function show($id): \Illuminate\Http\JsonResponse
    {
        $movie = Movie::with('genres')->findOrFail($id);
        return response()->json($movie);
    }
}
