<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Password Generator')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>
    </head>
    <body>
        <div id="app" class="w-100 h-100">
            @yield('content')
        </div>
    </body>

    <script src="{{asset('js/app.js')}}"></script>
</html>
