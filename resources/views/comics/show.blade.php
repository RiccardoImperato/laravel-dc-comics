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
            <div>
                <h5>Artists</h5>
                <ul class="list-unstyled">
                    @foreach ($comic->artists as $artist)
                        <li>{{ $artist }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <a href="{{ route('comics.index') }}">Back</a>
@endsection
