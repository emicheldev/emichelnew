<!-- Primary Meta Tags -->
@hasSection('title')
    <meta property="og:title" content="@yield('title')" />
@endif
<meta name="description" content="{{$description}}">
<meta name=”robots” content="index, follow">


<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }} ">
<meta property="og:title" content="{{$title}}">
<meta property="og:description" content="{{ $description}} ">
<meta property="og:image" content="{{ url(asset('images/captures/blog_emichel.png')) }} ">
<meta property="og:image:width" content="500" />
<meta property="og:image:height" content="500" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{url()->current() }}">
<meta property="twitter:title" content="{{$title}}">
<meta property="twitter:description" content="{{ $description}} ">
<meta property="twitter:image" content="{{ url(asset('images/captures/blog_emichel.png'))}}">