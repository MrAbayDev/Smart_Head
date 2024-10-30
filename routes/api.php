<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\GenreController;
use App\Http\Controllers\API\MovieController;

Route::resource('/genres', GenreController::class);

Route::resource('/movies', MovieController::class);

