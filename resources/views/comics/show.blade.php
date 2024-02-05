@extends('layout.app')

@section('main')
    <div>
        <h3 class="my-3">{{ $comic->title }}</h3>
        <figure class="figure">
            <img src="{{ $comic->thumb }}" class="rounded" alt="{{ $comic->title }}">
        </figure>
        <h5>Description</h5>
        <p class="my-4">{{ $comic->description }}</p>
        <div>
            <ul class="d-flex gap-5 list-unstyled">
                <li class="mb-3">
                    <h5>Serie</h5> {{ $comic->series }}
                </li>
                <li class="mb-3">
                    <h5>Price</h5>{{ $comic->price }}$
                </li>
                <li class="mb-3">
                    <h5>Sale date</h5> {{ $comic->sale_date }}
                </li>
                <li class="mb-3">
                    <h5>Type</h5> {{ $comic->type }}
                </li>
            </ul>
            <div class="mb-3">
                <h5>Writers</h5>
                {{ $comic->writers }}
            </div>
            <div class="mb-3">
                <h5>Artists</h5>
                {{ $comic->artists }}
            </div>
        </div>
    </div>
    <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm" role="button">Back to comics</a>
    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary btn-sm" role="button">Edit comic</a>
@endsection
