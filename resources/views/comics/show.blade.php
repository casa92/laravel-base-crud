@extends('layouts.app')

@section('main_content')

    <h1>Titolo singolo comic</h1>

    <div class="card">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <div>{{ $comic->series }}</div>
            <div>{{ $comic->type }}</div>
            <div>{{ $comic->sale_date }}</div>
            <div>{{ $comic->price }}</div>
            <p class="card-text">{{ $comic->description }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    
@endsection