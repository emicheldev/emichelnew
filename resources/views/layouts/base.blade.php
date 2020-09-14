<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @include('includes.head')

    <body class="font-sans text-xl leading-normal tracking-normal ">
        @include('includes.header')
        
        @yield('body')

        @include('includes.footer')
        <script src="{{ url(mix('js/app.js')) }}"></script>
        @livewireScripts
    </body>
</html>
