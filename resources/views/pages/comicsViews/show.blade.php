@extends('layouts.app')

@section('title', 'DC | Show')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <p>
            {{ $comic->description }}
        </p>
    </div>

@endsection
