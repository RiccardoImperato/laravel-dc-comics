@extends('layout.app')

@section('main')
    <h1>New Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                value="{{ old('thumb') }}">
            @error('thumb')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" step=".01"
                value="{{ old('price') }}">
            @error('price')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                value="{{ old('series') }}">
            @error('series')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                value="{{ old('type') }}">
            @error('type')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists"
                value="{{ old('artists') }}">
            @error('artists')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Writers</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers"
                value="{{ old('writers') }}">
            @error('writers')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Sale date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                value="{{ old('sale_date') }}">
            @error('sale_date')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" style="height: 100px"></textarea>
            @error('description')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
    <a href="{{ route('comics.index') }}">Back to comics</a>
@endsection
