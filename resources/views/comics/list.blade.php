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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger my-2" data-bs-toggle="modal"
                    data-bs-target="#exampleModal-{{ $comic->id }}">
                    Delete comic
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal-{{ $comic->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro di voler eliminare: {{ $comic->title }}?
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </li>
        @endforeach
    </ul>
@endsection
