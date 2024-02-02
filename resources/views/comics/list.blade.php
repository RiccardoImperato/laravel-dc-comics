@extends('layout.app')

@section('main')
    <h1>Comics</h1>
    <a href="{{ route('home') }}">Home</a> - <a href="{{ route('comics.create') }}">Add comic</a>
    <ul class="list-unstyled mt-3">
        @foreach ($comics as $comic)
            <li class="d-flex justify-content-between align-items-center">
                <div>
                    {{ $comic->id }} - {{ $comic->title }} -
                    <a href="{{ route('comics.show', $comic) }}">Details</a> -
                    <a href="{{ route('comics.edit', $comic) }}">Edit comic</a>
                </div>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger my-3" type="submit" value="Delete comic">
                </form>
            </li>
        @endforeach
    </ul>
@endsection
