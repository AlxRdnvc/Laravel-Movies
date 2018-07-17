<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

    </head>
    <body>
            <h4>{{ $movies->title }} ({{ $movies->year}})</h4>
            <p>director: {{ $movies->director }}</p>
            <p>{{ $movies->storyline }}</p>
    </body>
</html>