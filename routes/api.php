<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\GenreController;
use App\Http\Controllers\API\MovieController;

Route::get('genres', [GenreController::class, 'index']);
Route::get('genres/{id}', [GenreController::class, 'show']);

Route::get('movies', [MovieController::class, 'index']);
Route::get('movies/{id}', [MovieController::class, 'show']);

