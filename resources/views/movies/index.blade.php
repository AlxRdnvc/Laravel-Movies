@extends('layouts.master')


@section('content')
    <div>
        @foreach($movies as $movie)
        <a href="{{ '/movies/'.$movie->id }}">
            <h4>{{ $movie->title }}</h4>
        </a>
        <p>{{ $movie->storyline }}</p><hr>
        @endforeach
    </div>
@endsection