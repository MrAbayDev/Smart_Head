<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
class GenreController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('genres.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Genre::create([
            'name' => $request->name
        ]);

        return redirect()->route('genres.index')->with('success', 'Janr muvaffaqiyatli qo‘shildi');
    }

    public function show(Genre $genre): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('genres.show', compact('genre'));
    }

}
