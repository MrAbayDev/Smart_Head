<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GenreMovie;

class GenreMovieSeeder extends Seeder
{
    public function run(): void
    {
        GenreMovie::factory()->count(50)->create(); // 50 ta o‘rta jadval yozuvini yaratadi
    }
}
