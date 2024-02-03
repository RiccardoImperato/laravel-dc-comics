@extends('layout.app')

@section('main')
    <h1>Edit Comic - {{ $comic->title }}</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="price" step=".01"
                value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type }}">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input type="text" class="form-control" name="artists" id="artists" value="{{ $comic->artists }}">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Writers</label>
            <input type="text" class="form-control" name="writers" id="writers" value="{{ $comic->writers }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Sale date</label>
            <input type="date" class="form-control"name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" style="height: 100px">{{ $comic->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
    <a href="{{ route('comics.show', $comic) }}">Back</a> - <a href="{{ route('comics.index') }}">Back to comics</a>
@endsection
