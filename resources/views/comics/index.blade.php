@extends('layouts.app')

@section('main_content')
    <h2>lista de fumetti</h2>

    @foreach ($comics as $comic)
        <div>
            <h3>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                    {{ $comic->title }}
                </a>
            </h3>
            <div>{{ $comic->series }}</div>
        </div>
    @endforeach
        
@endsection