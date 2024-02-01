@extends('layout.app')

@section('main')
    <h1>Comics</h1>
    <a href="{{ route('comics.create') }}">Add comic</a>
    <ul class="list-unstyled mt-3">
        @foreach ($comics as $comic)
            <li>{{ $comic->id }} - {{ $comic->title }} - <a href="{{ route('comics.show', $comic) }}">datails</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('home') }}">Home</a>
@endsection
