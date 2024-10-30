<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class GenreMovieFactory extends Factory
{
    protected $model = \App\Models\GenreMovie::class; // O‘rta jadval modelini ko‘rsatamiz

    public function definition(): array
    {
        return [
            'movie_id' => Movie::factory(), // Yangi film yaratish
            'genre_id' => Genre::factory(),  // Yangi janr yaratish
        ];
    }
}
