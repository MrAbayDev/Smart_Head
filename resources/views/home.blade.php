@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-10">
        <header class="text-center">
            <h1 class="text-4xl font-bold">Bizning Film Portali</h1>
            <p class="mt-2 text-lg">Eng yaxshi filmlar, yangiliklar va ko'rsatuvlar.</p>
        </header>

        <nav class="mt-6">
            <ul class="flex justify-center space-x-4">
                <li><a href="{{ route('movies.index') }}" class="text-blue-500 hover:underline">Filmlar</a></li>
                <li><a href="{{ route('genres.index') }}" class="text-blue-500 hover:underline">Janrlar</a></li>
                <li><a href="{{ route('contact') }}" class="text-blue-500 hover:underline">Aloqa</a></li>
            </ul>
        </nav>

        <section class="mt-10">
            <h2 class="text-3xl font-semibold">Eng Mashhur Filmlar</h2>
            <ul class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                @foreach($movies as $movie)
                    <li class="border p-4 rounded">
                        <a href="{{ route('movies.show', $movie->id) }}">
                            <img src="{{ asset('storage/' . $movie->poster_url) }}" alt="{{ $movie->title }} posteri" class="w-full h-auto rounded">
                            <h3 class="mt-2 font-bold">{{ $movie->title }}</h3>
                        </a>
                        <p class="mt-1">Жанры:
                            @foreach($movie->genres as $genre)
                                {{ $genre->name }}@if (!$loop->last), @endif
                            @endforeach
                        </p>
                    </li>
                @endforeach
            </ul>
        </section>

        <footer class="mt-10 text-center">
            <p>&copy; {{ date('Y') }} Film Portal. Barcha huquqlar himoyalangan.</p>
            <p>Biz bilan ijtimoiy tarmoqlarda bo'ling!</p>
            <!-- Ijtimoiy tarmoqlar havolalari -->
            <ul class="flex justify-center space-x-4">
                <li><a href="#" class="text-blue-500 hover:underline">Facebook</a></li>
                <li><a href="#" class="text-blue-500 hover:underline">Twitter</a></li>
                <li><a href="#" class="text-blue-500 hover:underline">Instagram</a></li>
            </ul>
        </footer>
    </div>
@endsection
