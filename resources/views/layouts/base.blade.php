<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @include('includes.head')

    <body class="font-sans text-xl leading-normal tracking-normal bg-gray-50 ">
        @include('includes.header')
        
        @yield('body') 
        
        @include('includes.footer')

        {{-- scripts --}}
        
        <script type="text/javascript" src="{{ url(mix('js/app.js')) }}"></script>
        <script type="text/javascript" src=" {{ asset('js/prism.js ') }} "></script>

        @livewireScripts

        @stack('scripts')
    </body>
</html>
