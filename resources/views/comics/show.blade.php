@extends('layout.app')

@section('main')
    <h1>{{ $comic->title }}</h1>
    <a href="{{ route('comics.index') }}">Back</a>
@endsection
