<footer class="bg-indigo-700 body-font element">
    <div class="max-w-6xl py-24 mx-auto ">
      <div class="flex flex-wrap order-first text-center text-white md:text-left ">
        <div class="w-full px-4 lg:w-1/4 md:w-1/2">
          <h2 class="mb-3 text-base font-bold tracking-widest text-gray-900 title-font">Site</h2>
          <nav class="mb-10 text-sm list-none">
            <li>
              <a href="/" class=" hover:text-gray-800">Accueil</a>
            </li>
            <li>
              <a href=" {{ route('plans') }}" class=" hover:text-gray-800">s'inscrir</a>
            </li>
            <li>
              <a href="/blog" class=" hover:text-gray-800">Blog</a>
            </li>
            <li>
              <a href="/tutorials" class=" hover:text-gray-800">Tutoriels</a>
            </li>

            <li>
              <a class=" hover:text-gray-800">A propos</a>
            </li>
          </nav>
        </div>
        <div class="w-full px-4 lg:w-1/4 md:w-1/2">
          <h2 class="mb-3 text-base font-bold tracking-widest text-gray-900 title-font">Articles</h2>
          <nav class="mb-10 text-sm list-none">
           <x-last-post />
          </nav>
        </div>
        <div class="w-full px-4 lg:w-1/4 md:w-1/2">
          <h2 class="mb-3 text-base font-bold tracking-widest text-gray-900 title-font">Support</h2>
          <nav class="mb-10 text-sm list-none">
            <li>
              <a class=" hover:text-gray-800">Faq</a>
            </li>
            <li>
              <a class=" hover:text-gray-800">Privée</a>
            </li>
            <li>
              <a class=" hover:text-gray-800">Contact</a>
            </li>
            <li>
              <a class=" hover:text-gray-800">Nous rejoindre</a>
            </li>
          </nav>
        </div>
        <div class="w-full px-4 lg:w-1/4 md:w-1/2">
          <h2 class="mb-3 text-base font-bold tracking-widest text-gray-900 title-font">Newsletter</h2>
          <div class="flex flex-wrap justify-center xl:flex-no-wrap md:flex-no-wrap lg:flex-wrap md:justify-start">
            <form action="https://gmail.us5.list-manage.com/subscribe/post?u=cbf57550e8148ef30ac0a8521&amp;id=c6bbdd7f83" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <input name="EMAIL" type="email" id="mce-EMAIL" required class="w-40 px-4 py-2 mr-2 text-base text-gray-900 bg-gray-100 border border-gray-400 rounded sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 focus:outline-none focus:border-indigo-500" placeholder="Votre email" >
            </form>
          </div>
          <p class="mt-2 text-sm text-center text-gray-100 md:text-left">Vous recevriez les informations
            <br class="hidden lg:block">et des postes
          </p>
        </div>
      </div>
    </div>
    <div class="bg-gray-200">
      <div class="container flex flex-col items-center px-5 py-6 mx-auto sm:flex-row">
        <a href="/" class="flex items-center justify-center font-bold text-gray-900 title-font md:justify-start">
          <svg class="h-4" viewBox="0 0 300 120" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M86.99 23.267c2.2-2.2 2.2-5.774 0-7.975l-7.975-7.975a5.642 5.642 0 00-7.975 0L21.196 57.161a5.642 5.642 0 000 7.975l7.975 7.975c2.2 2.201 5.774 2.201 7.975 0L86.99 23.267z" fill="#4f2dbf"/><path d="M71.577 114.778a5.642 5.642 0 007.974-.08l7.896-8.053a5.642 5.642 0 00-.079-7.975L37.032 49.323a5.642 5.642 0 00-7.974.08l-7.896 8.053a5.642 5.642 0 00.08 7.975l50.335 49.347zM225.343 7.205a5.454 5.454 0 00-7.71.076L210 15.068a5.454 5.454 0 00.076 7.71l52.156 51.131a5.455 5.455 0 007.71-.076l7.634-7.787a5.455 5.455 0 00-.077-7.71L225.343 7.205zM157.046 8.8a4.97 4.97 0 016.54-2.564l9.105 3.976a4.97 4.97 0 012.565 6.54l-42.285 96.845a4.97 4.97 0 01-6.54 2.565l-9.104-3.975a4.97 4.97 0 01-2.565-6.54L157.046 8.8z" fill="#7161ef"/><g><path d="M213.933 98.707a5.455 5.455 0 000 7.71l7.71 7.71a5.455 5.455 0 007.71 0l48.19-48.189a5.455 5.455 0 000-7.71l-7.71-7.71a5.455 5.455 0 00-7.71 0l-48.19 48.189z" fill="#4f2dbf"/></g><g><path d="M132.493 61.199l-16.879 38.527s-15.864 1.46-21.292-4.54c-5.151-5.694-11.429-9-3.572-14.429 0 0 2.286-1 13.429 7.714 0 0 6.335 2.714 10.167 0 3.868-2.739 5.119-4.429 6.404-11.286H93.036s-5.235.508-6.046-12.921c0 0 .475-14.846 15.76-16.639l13-.429s14.915 2.086 16.743 14.003zm-26.743-3.225h8.596s6.262 3 5.976 9.571h-19s-1.857-5.286 4.428-9.571z" fill="#4f2dbf"/></g><g><path d="M158.158 61.112l8.984-18.273 7.143 28.572s.344 1.428 1.386-1c1.042-2.429 10.185-36.857 10.185-36.857s.857-4.142 4-4.158h11.714s5.948.84 6.331 5.983v57.857s-1.33 5.506-3.188 5.896h-6.143s-3.857-1.038-4.285-5.18l-.143-41.858s-.857-3.143-1.429-.858c0 0-9.367 41.858-9.683 42-.317.143-1.602 5.792-5.46 5.896-3.857.104-4.285 0-4.285 0s-4.715-.324-5.715-4.61l-9.412-33.41z" fill="#4f2dbf"/></g></svg>
        </a>
        <p class="mt-4 text-sm text-gray-500 sm:ml-6 sm:mt-0">© 2020 emichel —
          <a href="https://twitter.com/emichel_dev" rel="noopener noreferrer" class="ml-1 " target="_blank">@emichel_dev</a>
        </p>
        <span class="inline-flex justify-center mt-4 text-gray-500 sm:ml-auto sm:mt-0 sm:justify-start">
          <a class="" href="https://www.facebook.com/emichdev" rel="noopener noreferrer" target="_blank">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 " href="https://twitter.com/emichel_dev" rel="noopener noreferrer" target="_blank" >
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 " href="https://www.instagram.com/e.micheldev/" rel="noopener noreferrer" target="_blank">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 " href="https://www.linkedin.com/in/e-michel/" rel="noopener noreferrer" target="_blank">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
</footer>
