@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>aggiungi un nuovo fumetto</h1>
    
    <form action="{{ route('comics.store') }}" method="post">
        {{-- crea token univoco per sapere che i dati arrivano dal sito --}}
        @csrf
        {{-- per tutti i metodi eccetto get isogna mettere post nel tag html e il metodo scelto qui, se no non viene letto --}}
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="textarea" class="form-control" id="description" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection