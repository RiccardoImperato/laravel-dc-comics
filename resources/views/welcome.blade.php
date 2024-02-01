@extends('layout.app')

@section('main')
    <h1>DC Comics</h1>
    <a href="{{ route('comics.index') }}">All Comics</a>
@endsection
