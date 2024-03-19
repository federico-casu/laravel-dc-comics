@extends('layouts.app')

@section('title', 'DC | Create')
    
@section('content')
    <div class="container">
        <h1>Crea nuovo Comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="form-control"
                />
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input
                    type="text"
                    name="thumb"
                    id="thumb"
                    class="form-control"
                />
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input
                    type="number"
                    name="price"
                    id="price"
                    class="form-control"
                />
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input
                    type="text"
                    name="series"
                    id="series"
                    class="form-control"
                />
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input
                    type="date"
                    name="sale_date"
                    id="sale_date"
                    class="form-control"
                />
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input
                    type="text"
                    name="type"
                    id="type"
                    class="form-control"
                />
            </div>

            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            
        </form>
        
    </div>
@endsection