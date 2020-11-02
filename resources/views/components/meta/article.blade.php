<!-- Primary Meta Tags -->
@hasSection('title')
    <meta property="og:title" content="@yield('title')" />
@endif
<meta name="description" content="{{$description}}">
<meta name=”robots” content="index, follow">


<!-- Open Graph / Facebook -->
<meta property="og:type" content="article">
<meta property="og:url" content="{{$url}} ">
<meta property="og:title" content="{{$title}}">
<meta property="og:description" content="{{ $description}} ">
<meta property="og:image" content="{{ url(asset('images/logo')) }} ">
<<<<<<< HEAD
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
=======
<meta property="og:image:width" content="500" />
<meta property="og:image:height" content="500" />
>>>>>>> develop
<meta property="og:locale" content="fr_FR" />
<meta property="og:site_name" content="E. Michel Learning" />
<meta property="og:article:published_time" content="{{ $article->created_at->toIso8601String() }}">
<meta property="og:article:modified_time" content="{{ $article->updated_at->toIso8601String() }}">
<meta property="og:article:author" content="e.Michel">
<meta property="og:article:section" content="Technology">
<link rel=“canonical” href=“{{ $article->url }}” />


<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="{{$title}}">
<meta property="twitter:description" content="{{ $description}} ">
<meta property="twitter:image" content="{{ url(asset('images/logo'))}}">
@foreach ($article->tags as $tag)
      <meta property="og:article:tag" content="{{ $tag->name }}">
@endforeach