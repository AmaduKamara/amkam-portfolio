<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Amkam</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300&display=swap" rel="stylesheet">

        {{-- Tailwindcss Link --}}
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
         <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
       
    </head>
    <body>

        {{-- <router-view></router-view> --}}
        
        <div id="app">
            <app></app> 
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
