<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @include('includes.head')

    <body class="font-sans text-xl leading-normal tracking-normal ">
        @include('includes.header')
        
        @yield('body')

        <script src="{{ url(mix('js/app.js')) }}"></script>
        <script src=" {{ asset('js/prism.js ') }} "></script>
        @include('includes.footer')
        @livewireScripts
    </body>
</html>
