<aside class="col-md-4 order-md-2" style="text-align: center;">
    <h4>Latest movies:</h4><hr>
    @foreach($latest_movies as $movie)
        <a href="/movies/{{ $movie->id }}"><h5>{{ $movie->title }}</h5></a>
    @endforeach
</aside>