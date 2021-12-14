<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <script src="//unpkg.com/alpinejs" defer></script>

        <title>Movies App</title>
    </head>
    <body class="font-sans w-full min-h-screen bg-gray-900 text-white">
        <header class="border-b border-gray-600">
            @include('layouts.nav')
        </header>
        <main class="w-full">@yield('content')</main>
    </body>
</html>
