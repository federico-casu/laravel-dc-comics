@extends('layouts.graphic')

@section('title', 'DC | Show')


@section('main')
    <main>
        <figure class="jumbotron">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
        </figure>
        <div class="categories"></div>
        <div class="container comic-area">
            <figure class="comic-thumb">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </figure>

            <h2 class="comic-title">{{ $comic->title }}</h2>
            <p class="comic-description">{{ $comic->description }}</p>

            <h4>Specs</h4>
            <ul class="comic-specs">
                <li>Series: <span>{{ $comic->series }}</span></li>
                <li>U.S. Price: <span>{{ $comic->price }} $</span></li>
                <li>On Sale Date: <span>{{ $comic->sale_date }}</span></li>
                <li>Type: <span>{{ $comic->type }}</span></li>
            </ul>
        </div>
    </main>
@endsection
