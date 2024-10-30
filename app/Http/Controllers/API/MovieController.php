<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $movies = Movie::with('genres')->paginate(10);
        return response()->json($movies);
    }

    public function show($id): JsonResponse
    {
        $movie = Movie::with('genres')->findOrFail($id);
        return response()->json($movie);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'is_published' => 'required|boolean',
            'poster_url' => 'required|url',
            'genres' => 'array',
        ]);

        $movie = Movie::create($request->all());

        if ($request->has('genres')) {
            $movie->genres()->sync($request->genres);
        }

        return response()->json($movie, 201);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $movie = Movie::findOrFail($id);

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'is_published' => 'sometimes|required|boolean',
            'poster_url' => 'sometimes|required|url',
            'genres' => 'array',
        ]);

        $movie->update($request->all());

        if ($request->has('genres')) {
            $movie->genres()->sync($request->genres);
        }

        return response()->json($movie);
    }

    public function destroy($id): JsonResponse
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return response()->json(null, 204);
    }
}
