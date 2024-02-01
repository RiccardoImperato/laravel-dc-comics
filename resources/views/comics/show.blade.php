@extends('layout.app')

@section('main')
    <figure class="figure">
        <img src="{{ $comic->thumb }}" class="rounded" alt="{{ $comic->title }}">
    </figure>
    <div>
        <h3 class="my-3">{{ $comic->title }}</h3>
        <p class="mb-3">{{ $comic->description }}</p>
        <div>Serie: {{ $comic->series }}</div>
        <div>Price: {{ $comic->price }}$</div>
        <div>Sale date: {{ $comic->sale_date }}</div>
        <div>Type: {{ $comic->type }}</div>
    </div>
    <a href="{{ route('comics.index') }}">Back</a>
@endsection
