@extends('layouts.graphic')

@section('title')
    DC | Home
@endsection

@section('main')
    <main>
        <figure id="jumbotron">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
        </figure>

        <section class="content">
            <div id="comics" class="container">
    
                <span class="current-series">current series</span>
                
                {{-- {{ dd($comics) }} --}}

                @foreach ($comics as $comic)
                    <a href="{{ route('comics.show', $comic->id) }}" class="comic">
                        <figure>
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </figure>
                        <span>{{ $comic->series }}</span>
                    </a>
                @endforeach
        
                <span class="load-more">load more</span>
            </div>
        </section>

        <section id="categories">
            <div class="container">
                @foreach ($categories as $category)
                    <div>
                        <figure>
                            <img src="{{ Vite::asset('resources/img/') . $category['image'] }}" alt="{{ $category['name'] }}">
                        </figure>
                        <span>{{ $category['name'] }}</span>
                    </div>
                @endforeach
            </div>
        </section>


    </main>
@endsection
