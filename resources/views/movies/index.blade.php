@extends('layouts.app')

@section('content')
    <h1>Список фильмов</h1>

    <ul>
        @foreach($movies as $movie)
            <li>
                <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a>
                <p>Жанры:
                    @foreach($movie->genres as $genre)
                        {{ $genre->name }}
                    @endforeach
                </p>
                <img src="{{ asset('storage/' . $movie->poster_url) }}" alt="{{ $movie->title }} posteri" width="100">
            </li>
        @endforeach
    </ul>

    <!-- Paginatsiya linklarini ko'rsatish -->
    {{ $movies->links() }}
@endsection
