<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Wegive' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.6.0-web/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/cs/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cs/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cs/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/js/jquery-1.11.0.min.js') }}">
    <script src="{{ asset('css/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('css/js/plugins.js') }}"></script>
    <script src="{{ asset('css/js/main.js') }}"></script>
    <script src="{{ asset('css/js/modernizr.js') }}"></script>
    <script src="{{ asset('css/js/pace.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap.bundle.min.js') }}"></script>
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @include('admin.css')
    @include('admin.script')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        {{-- @include('layouts.navigation') --}}
        {{-- @include('layouts.header') --}}
        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
