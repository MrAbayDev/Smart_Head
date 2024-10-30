<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(): JsonResponse
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    public function show($id): JsonResponse
    {
        $genre = Genre::findOrFail($id);
        $movies = $genre->movies()->paginate(10);

        return response()->json([
            'genre' => $genre,
            'movies' => $movies
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create($request->all());

        return response()->json($genre, 201);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $genre = Genre::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update($request->all());

        return response()->json($genre);
    }

    public function destroy($id): JsonResponse
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return response()->json(null, 204);
    }
}
