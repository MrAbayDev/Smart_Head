<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Seeders\Genre_MovieFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'is_published',
        'poster_url'
    ];
    public function genres(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Genre::class,'genre_movies');
    }
}
