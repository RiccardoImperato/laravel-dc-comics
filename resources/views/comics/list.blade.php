@extends('layout.app')

@section('main')
    <h1>Comics</h1>
    <a href="{{ route('home') }}">Home</a> - <a href="{{ route('comics.create') }}">Add comic</a>
    <ul class="list-unstyled mt-3">
        @foreach ($comics as $comic)
            <li>
                {{ $comic->id }} - {{ $comic->title }} -
                <a href="{{ route('comics.show', $comic) }}">Details</a> -
                <a href="{{ route('comics.edit', $comic) }}">Edit comic</a>
            </li>
        @endforeach
    </ul>
@endsection
