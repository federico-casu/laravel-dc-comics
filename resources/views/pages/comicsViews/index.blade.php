@extends('layouts.app')

@section('title', 'DC | Index')

@section('content')

    {{-- {{ dd($comics) }} --}}

    <div class="container">
        <h1 class="text-primary my-3">Sono la index delle comics Views</h1>
        {{-- <div class="row">
            @foreach ($comics as $comic)
                <div class="card col-4">
                    <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}" />
                    <div class="card-body">
                        <h4 class="card-title">{{ $comic->title }}</h4>
                        <p class="card-text">{{ $comic->description }}</p>
                    </div>
                </div>
            @endforeach
        </div> --}}

        <div
            class="table-responsive"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        {{-- <th scope="col">Description</th> --}}
                        {{-- <th scope="col">Thumb</th> --}}
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr class="lh-1">
                            <td>{{ $comic->id }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                            </td>
                            {{-- <td>{{ $comic->description }}</td> --}}
                            {{-- <td>{{ $comic->thumb }}</td> --}}
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td class="d-flex justify-content-center align-items-center gap-2">
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea nuovo Comic</a>
        </div>
        
    </div>
@endsection
