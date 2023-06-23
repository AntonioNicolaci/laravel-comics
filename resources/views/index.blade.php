<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DC Comics</title>
        @vite('resources/scss/app.scss')
    </head>
    <body>
        <div>
            @foreach ($comics as $comic)
                <div>
                    <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['series'] }}">
                    <span>{{ $comic['series'] }}</span>
                </div>
            @endforeach
        </div>

    </body>
</html>
