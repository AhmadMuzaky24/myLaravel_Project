<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Barokah Mart')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

    {{-- Navigation --}}
    @include('layouts.navigation')


    {{-- Konten halaman --}}
    <main>
        @yield('content')
    </main>


    {{-- Script tambahan jika diperlukan --}}
    @stack('scripts')

</body>

</html>