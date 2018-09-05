@extends('layouts.master')


@section('content')
    <h4>{{ $movies->title }} ({{ $movies->year}})</h4>
    <p class="subtitle">director: {{ $movies->director }}</p>
    <a class="subtitle" href="/genres/{{ $movies->genre }}">genre: {{ $movies->genre }}</a>
    <p>{{ $movies->storyline }}</p>

    <div class="container"><hr>

    <h4>Comments</h4><br>
    @foreach($movies->comments as $comment)
        <div class='card-block'>
            <p><em>created at ({{ $comment->created_at }})</em><p>
            <p>{{ $comment->content }}<p>
        </div> 
    @endforeach

        <form method="POST">

        {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Comment</label>
                <input type="text" class="form-control" id="content" name="content"/>
                @include('partials.error-message', ['fieldName' => 'content'])
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add a comment</button>
            </div>

        </form>
    </div>
@endsection