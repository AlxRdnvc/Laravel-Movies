@extends('layouts.master')


@section('content')
    <h4>{{ $movies->title }} ({{ $movies->year}})</h4>
    <p class="subtitle">director: {{ $movies->director }}</p>
    <p class="subtitle">genre: {{ $movies->genre }}</p>
    <p>{{ $movies->storyline }}</p>
@endsection