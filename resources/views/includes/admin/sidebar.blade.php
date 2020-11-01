<div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
    
<div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="text-xs fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-8">
        <div class="">
           <a href="{{ route('dashboard')}}" class="flex items-center">
            <svg class="h-6" viewBox="0 0 300 120" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M86.99 23.267c2.2-2.2 2.2-5.774 0-7.975l-7.975-7.975a5.642 5.642 0 00-7.975 0L21.196 57.161a5.642 5.642 0 000 7.975l7.975 7.975c2.2 2.201 5.774 2.201 7.975 0L86.99 23.267z" fill="#4f2dbf"/><path d="M71.577 114.778a5.642 5.642 0 007.974-.08l7.896-8.053a5.642 5.642 0 00-.079-7.975L37.032 49.323a5.642 5.642 0 00-7.974.08l-7.896 8.053a5.642 5.642 0 00.08 7.975l50.335 49.347zM225.343 7.205a5.454 5.454 0 00-7.71.076L210 15.068a5.454 5.454 0 00.076 7.71l52.156 51.131a5.455 5.455 0 007.71-.076l7.634-7.787a5.455 5.455 0 00-.077-7.71L225.343 7.205zM157.046 8.8a4.97 4.97 0 016.54-2.564l9.105 3.976a4.97 4.97 0 012.565 6.54l-42.285 96.845a4.97 4.97 0 01-6.54 2.565l-9.104-3.975a4.97 4.97 0 01-2.565-6.54L157.046 8.8z" fill="#7161ef"/><g><path d="M213.933 98.707a5.455 5.455 0 000 7.71l7.71 7.71a5.455 5.455 0 007.71 0l48.19-48.189a5.455 5.455 0 000-7.71l-7.71-7.71a5.455 5.455 0 00-7.71 0l-48.19 48.189z" fill="#4f2dbf"/></g><g><path d="M132.493 61.199l-16.879 38.527s-15.864 1.46-21.292-4.54c-5.151-5.694-11.429-9-3.572-14.429 0 0 2.286-1 13.429 7.714 0 0 6.335 2.714 10.167 0 3.868-2.739 5.119-4.429 6.404-11.286H93.036s-5.235.508-6.046-12.921c0 0 .475-14.846 15.76-16.639l13-.429s14.915 2.086 16.743 14.003zm-26.743-3.225h8.596s6.262 3 5.976 9.571h-19s-1.857-5.286 4.428-9.571z" fill="#4f2dbf"/></g><g><path d="M158.158 61.112l8.984-18.273 7.143 28.572s.344 1.428 1.386-1c1.042-2.429 10.185-36.857 10.185-36.857s.857-4.142 4-4.158h11.714s5.948.84 6.331 5.983v57.857s-1.33 5.506-3.188 5.896h-6.143s-3.857-1.038-4.285-5.18l-.143-41.858s-.857-3.143-1.429-.858c0 0-9.367 41.858-9.683 42-.317.143-1.602 5.792-5.46 5.896-3.857.104-4.285 0-4.285 0s-4.715-.324-5.715-4.61l-9.412-33.41z" fill="#4f2dbf"/></g></svg>

            <span class="text-white text-2xl mx-2 font-semibold">Dashboard</span>
           </a>
        </div>
    </div>

    <nav class="mt-10">
        <a class="flex items-center mt-1 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100" href="{{ route('dashboard')}} ">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
            </svg>

            <span class="mx-3">Dashboard</span>
        </a>

        <div class="" x-data="{ open: false }">
            <a class="flex items-center mt-1 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 cursor-pointer" @click="open = true">

                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                <span class="mx-3">Posts</span>
            </a>
            <div class="flex flex-col py-2 px-6 text-gray-200 bg-gray-800" x-show="open" @click.away="open = false">
                <a class="mt-1 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="{{ route('storepost')}} ">Liste </a>
                <a class="mt-1 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="{{ route('createpost')}}">Ajouter</a>
                <a class="mt-1 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="">Soluta.</a>
            </div>
        </div>

        <a class="flex items-center mt-1 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="/tables">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
            <span class="mx-3">Courses</span>
        </a>

        <a class="flex items-center mt-1 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100" href="{{ route("users")}} ">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>

            <span class="mx-3">Users</span>
        </a>
    </nav>
</div>