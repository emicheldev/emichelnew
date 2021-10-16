<!-- Primary Meta Tags -->
@hasSection('title')
    <meta property="og:title" content="@yield('title')" />
@endif
    <meta name="description" content="{{$course->description}}">
    <meta name=”robots” content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="course">
    <meta property="og:url" content="{{url()->current()}} ">
    <meta property="og:title" content="{{$course->name}}">
    <meta property="og:description" content="{{ $course->description}} ">
    <meta property="og:image" content="{{ url($course->image) }} ">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:site_name" content="E. Michel Learning" />
    <meta property="og:course:published_time" content="{{ $course->created_at->toIso8601String() }}">
    <meta property="og:course:modified_time" content="{{ $course->updated_at->toIso8601String() }}">
    <meta property="og:course:author" content="e.Michel">
    <meta property="og:course:section" content="Technology">
    <link rel=“canonical” href=“{{ url()->current() }}” />


    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="{{$course->title}}">
    <meta property="twitter:description" content="{{ $course->description}} ">
    <meta property="twitter:image" content="{{ url(asset('images/logo'))}}">
    <meta property="og:course:tag" content="php,html,javascript,css,laravel">
