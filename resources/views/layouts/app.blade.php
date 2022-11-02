<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - {{ config('app.name') }}</title>
        <link rel="shortcut icon" href="{{ Vite::asset('resources/images/favicon.ico') }}" type="image/x-icon">
        @vite(['resources/js/app.js'])
    </head>
    <body>
        <div class="d-flex flex-column min-vh-100">
            @include('layouts.header')
            <main class="flex-grow-1 py-4">
                @yield('content')
            </main>
            @include('layouts.footer')
        </div>
    </body>
</html>
