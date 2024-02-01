@extends('layout.app')

@section('main')
    <h1>Comics</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>{{ $comic->id }} - {{ $comic->title }} - <a href="{{ route('comics.show', $comic) }}">datails</a>
            </li>
        @endforeach
    </ul>
@endsection
