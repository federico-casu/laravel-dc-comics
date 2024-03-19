@extends('layouts.graphic')

@section('title', 'DC | Show')


@section('main')
    <figure id="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </figure>
    <div class="container">
        {{-- <h1>{{ $comic->title }}</h1>
        <p>
            {{ $comic->description }}
        </p> --}}

        {{-- <div class="card">
            <img class="card-img-top w-50" src="{{ $comic->thumb }}" alt="{{ $comic->title }}" />
            <div class="card-body">
                <h4 class="card-title">{{ $comic->title }}</h4>
                <p class="card-text">{{ $comic->description }}</p>
            </div>
        </div> --}}
        
    </div>

@endsection
