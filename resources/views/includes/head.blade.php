<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    @hasSection('meta')
    <!-- Meta / Open Graph -->
        @yield('meta')
    @endif
    
    <!-- Favicon -->
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url(asset('icons/apple-touch-icon.png')) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url(asset('icons/favicon-32x32.png')) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url(asset('icons/favicon-16x16.png')) }}">
    <link rel="manifest" href="{{ url(asset('icons/site.webmanifest')) }}">
    <link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <style>
        .element {
            content-visibility: auto;
        }
    </style>
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">    
    @livewireStyles
    @stack('styles')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>