<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <h1>This is About page</h1>

        <button><a href="{{URL::previous()}}">Back</a></button>
        <button><a href="{{ route("contact") }}">Contact</a></button>
    </body>
</html>
