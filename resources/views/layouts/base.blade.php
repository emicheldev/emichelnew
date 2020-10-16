<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @include('includes.head')

    <body class="font-sans text-xl leading-normal tracking-normal bg-gray-50 ">
        
        @yield('body')

        {{-- scripts --}}
        
        <script type="text/javascript" src="{{ url(mix('js/app.js')) }}"></script>

        @stack('scripts')
        @livewireScripts

    </body>
</html>
