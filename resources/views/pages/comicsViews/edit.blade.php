@extends('layouts.app')

@section('title', 'DC | Edit')
    
@section('content')
    <div class="container">
        <h1>Modifica Comic</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="form-control"
                    value="{{ old('title') ?? $comic->title }}"
                />
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') ?? $comic->description }}</textarea>
            </div>
            

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input
                    type="text"
                    name="thumb"
                    id="thumb"
                    class="form-control"
                    value="{{ old('thumb') ?? $comic->thumb }}"
                />
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input
                    type="number"
                    name="price"
                    id="price"
                    class="form-control"
                    value="{{ old('price') ?? $comic->price }}"
                />
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input
                    type="text"
                    name="series"
                    id="series"
                    class="form-control"
                    value="{{ old('series') ?? $comic->series }}"
                />
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input
                    type="date"
                    name="sale_date"
                    id="sale_date"
                    class="form-control"
                    value="{{ old('sale_date') ?? $comic->sale_date }}"
                />
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input
                    type="text"
                    name="type"
                    id="type"
                    class="form-control"
                    value="{{ old('type') ?? $comic->type }}"
                />
            </div>

            <button
                type="submit"
                class="btn btn-primary"
            >
                Save
            </button>
            
        </form>
        
    </div>
@endsection