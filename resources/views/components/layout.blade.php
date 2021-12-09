<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ilisarniq:wght@900&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Ilisarniq ', sans-serif;
                background:none rgb(22, 33, 44);
            }
        </style>
    </head>
    <body class="antialiased">
        <header>
           
        </header>

        {{ $slot }}

        <footer></footer>
    </body>
</html>
