@extends('layouts.app')

@section('content')
    <h1>Список жанров</h1>

    <ul>
        @foreach($genres as $genre)
            <li>
                <a href="{{ route('genres.show', $genre->id) }}">{{ $genre->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection

