<nav class="shadow element" x-data="{ open: false} ">
    <div class="max-w-6xl px-6 py-3 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <div>
                <a class="element" href="/">
                   <img  src="{{ asset('images/emichel_logo.svg')}}" alt="emichel logo" class="h-6 ">
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu" @click="open= !open">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="items-center md:flex" @click.away="open = false" :class="{ 'hidden': !open}" x-cloak="">
            <div class="flex flex-col md:flex-row md:mx-6">
                <a class="my-1 text-sm font-medium text-gray-700 hover:text-indigo-500 md:mx-4 md:my-0" href="/">Home</a>
                <a class="my-1 text-sm font-medium text-gray-700 hover:text-indigo-500 md:mx-4 md:my-0" href="{{ route('learning') }}">Cours</a>
                @if (Route::has('login'))
                    @auth
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="my-1 text-sm font-medium text-gray-700 hover:text-indigo-500 md:mx-4 md:my-0"
                        >
                        Déconnexion
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="my-1 text-sm font-medium text-gray-700 hover:text-indigo-500 md:mx-4 md:my-0">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="my-1 text-sm font-medium text-gray-700 hover:text-indigo-500 md:mx-4 md:my-0">Inscription</a>
                        @endif
                    @endauth
            @endif
            </div>

            {{-- <div class="flex text-sm md:block">

                <button class="inline-flex items-center h-10 px-5 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="w-6 h-6 folder">
                        <path d="M527.9 224H480v-48c0-26.5-21.5-48-48-48H272l-64-64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h400c16.5 0 31.9-8.5 40.7-22.6l79.9-128c20-31.9-3-73.4-40.7-73.4zM48 118c0-3.3 2.7-6 6-6h134.1l64 64H426c3.3 0 6 2.7 6 6v42H152c-16.8 0-32.4 8.8-41.1 23.2L48 351.4zm400 282H72l77.2-128H528z"/>
                    </svg>
                    <span class="ml-2">Tutorièls</span>
                </button>
            </div> --}}
        </div>
    </div>
</nav>
