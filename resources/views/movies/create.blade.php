@extends('layouts.master')


@section('content')
    <div class="container">
        <h5>Add new movie:</h5><hr>
        <form method="POST" action="/create">

        {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title"/>
                @include('partials.error-message', ['fieldName' => 'title'])
            </div>

            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre"/>
                @include('partials.error-message', ['fieldName' => 'genre'])
            </div>

            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control" id="director" name="director"/>
                @include('partials.error-message', ['fieldName' => 'director'])
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" id="year" name="year"/>
                @include('partials.error-message', ['fieldName' => 'year'])
            </div>

            <div class="form-group">
                <label for="storyline">Storyline</label>
                <input type="text" class="form-control" id="storyline" name="storyline"/>
                @include('partials.error-message', ['fieldName' => 'storyline'])
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add movie</button>
            </div>

        </form>
    </div>
@endsection