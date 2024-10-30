@extends('layouts.app')

@section('content')
    <h1>{{ $movie->title }}</h1>

    <p>Статус публикации: {{ $movie->is_published ? 'Опубликован' : 'Не опубликован' }}</p>

    <p>Жанры:
        @foreach($movie->genres as $genre)
            {{ $genre->name }}
        @endforeach
    </p>

    <img src="{{ asset('storage/' . $movie->poster_url) }}" alt="{{ $movie->title }} posteri" width="200">
@endsection
