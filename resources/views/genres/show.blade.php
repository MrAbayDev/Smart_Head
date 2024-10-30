@extends('layouts.app')

@section('content')
    <h1>Фильмы в жанре {{ $genre->name }}</h1>

    @if($movies->isEmpty())
        <p>В этом жанре нет фильмов.</p>
    @else
        <ul>
            @foreach($movies as $movie)
                <li>
                    <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a>
                </li>
            @endforeach
        </ul>

        {{ $movies->links() }} <!-- Sahifalash -->
    @endif
@endsection
