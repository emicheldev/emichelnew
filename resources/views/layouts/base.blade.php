<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @include('includes.head')

    <body class="font-sans text-xl leading-normal tracking-normal bg-gray-50 ">
        
        @yield('body')
        {{-- scripts --}}
        
        <script type="text/javascript" src="{{ url(mix('js/app.js')) }}"></script>

        @livewireScripts
        @stack('scripts')
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
    </body>
</html>
