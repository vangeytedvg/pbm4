<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="w-full h-full bg-no-repeat bg-contain">
        @include('layouts.navigation')

        <!-- Image background -->


        <!-- Page Heading -->
        <header class="bg-white">
            <div class="mx-auto py-2 px-4 sm:px-6 lg:px-8 bg-gray-600 text-gray-200">
                Personal Budget Manager v4.0
            </div>
        </header>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
    </div>
</body>

</html>