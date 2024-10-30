<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $movies = App\Models\Movie::with('genres')->take(6)->get(); // Olingan filmlarni cheklash
    return view('home', compact('movies'));
});


Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}', [GenreController::class, 'show']);

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);

require __DIR__.'/auth.php';
