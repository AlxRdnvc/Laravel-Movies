@extends('layouts.master')


@section('content')
    <h4>{{ $movies->title }} ({{ $movies->year}})</h4>
    <p>director: {{ $movies->director }}</p>
    <p>{{ $movies->storyline }}</p>
@endsection