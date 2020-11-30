@section('title', 'Devéloppeur web freelance')

@section('meta')
    <x-meta.general description="Je suis développeur web et designer freelance, je réalise les applications web pour les cliens. Satisfaire mes clients est ma priorité.
    "
    title="Devéloppeur web freelance | e.Michel"
    />
@endsection

@push('styles')
  <link href="https://unpkg.com/pattern.css" rel="stylesheet">
@endpush

<div class=" text-gray-200 bg-gray-900">
   <section class="max-w-6xl mx-auto px-6 element">
        <div class="md:flex items-center">
                <div class="w-full md:w-1/2">
                    <div class="max-w-lg">
                        <h1 class=" uppercase text-4xl tracking-tight leading-10 font-extrabold sm:text-5xl sm:leading-none md:text-6xl">Qui suis-je ?</h1>
                        <p class="mt-2 text-4xl tracking-tight leading-10 font-extrabold sm:text-5xl sm:leading-none md:text-6xl  ">
                            <span class="typed font-black"></span>
                        </p>
                    </div>
                </div>
        
                <div class="flex items-center justify-center w-full mt-6 md:mt-0 md:w-1/2">
                    <img loading=lazy src="/images/emichel_profil.svg" alt="php" class="h-full w-full"  srcset="">
                </div>
        </div>
   </section>

    <section class="skills  body-font element">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
          <div class="text-center mb-20">
            
            <h1 class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">Compétences</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">L'informatique est vaste et les langages naissent presque à tout moment, je fais tout mon possible pour être à la hauteur afin de répondre au besoin de mes clients et d'apporter de l'aide aux nouveaux développeurs.</p>
            <div class="flex mt-6 justify-center">
              <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
            </div>
          </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 ">
            <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
              <div class="pattern-dots-md gray-light">
                <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6  "  >
                  <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>                </div>
                  <div class="flex-grow ">
                    <h2 class=" text-xl title-font font-medium mb-3">Webdesign</h2>
                    <p class="leading-relaxed text-sm text-justify">Donner du goût 😍 de la couleur aux applications, je le fais afin de rendre vos sites attrayants 🎨. Avant de devenir webdesigner, depuis tout petit j'étais déjà familier à la couleur et du dessin.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
              <div class="pattern-dots-md gray-light">
                <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6 ">
                  <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-5 flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                  </div>
                  <div class="flex-grow">
                    <h2 class=" text-xl title-font font-medium mb-3">Intégration web</h2>
                    <p class="leading-relaxed text-sm text-justify">
                    HTML, CSS, JAVASCRIPT et leurs framework, sont les technos que je travaille 👨‍💻 avec afin d'intéger les maquettes des site.
                    En respectant les normes de 3WC. 
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
              <div class="pattern-dots-md gray-light">
                <div class="rounded bg-gray-800 p-4 transform translate-x-6 -translate-y-6 ">
                  <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-5 flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                  </div>
                  <div class="flex-grow">
                    <h2 class=" text-xl title-font font-medium mb-3">Developpement Back-end</h2>
                    <p class="leading-relaxed text-sm text-justify">
                      Grâce à Php et ces frameworks (Larave, Symfoni, Slim), je peux vous réaliser un site dynamique c'est-à-dire qui interagie avec votre base de données 💪. Nous pouvons essayer.
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>

    <section class="  body-font element">
      <div class="max-w-6xl mx-auto px-5 py-24 ">
        <div class="text-center mb-20">
          
          <h1 class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">Projets</h1>
          <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">.</p>
          <div class="flex mt-6 justify-center">
            <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
          </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 ">
          <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
            <img loading=lazy src="/images/portfolio/iactc.png" alt="php" class="h-full w-full"  srcset="">
          </div>
          <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
            <img loading=lazy src="/images/portfolio/agence.png" alt="php" class="h-full w-full"  srcset="">
          </div>
          <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
            <img loading=lazy src="/images/portfolio/portfolio.png" alt="php" class="h-full w-full"  srcset="">
          </div>

          <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
            <img loading=lazy src="/images/portfolio/association.png" alt="php" class="h-full w-full"  srcset="">
          </div>
          <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
            <img loading=lazy src="/images/portfolio/villasamuel.jpg" alt="php" class="h-full w-full"  srcset="">
          </div>
          <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
            <img loading=lazy src="/images/portfolio/missiondesalut.jpg" alt="php" class="h-full w-full"  srcset="">
          </div>
      </div>
    </section>

    <section class=" body-font">
      <div class="max-w-6xl mx-auto px-5 py-24 ">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
          <h1 class=" title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl"> Derniers cours </h1>
          <p class="lg:w-1/2 w-full leading-relaxed text-base">
            Enseigner c'est apprendre deux fois. J'aime partager mes connaissances et mes découvertses.
          </p>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="xl:w-1/3 md:w-1/2 p-4">
            <div class="border border-gray-300 p-6 rounded-lg">
              <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                <svg class=" fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>
              </div>
              <h2 class="text-lg  font-medium title-font mb-2">L'essentiel du HTML5 </h2>
              <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
              
              <div class="text-center mt-2 leading-none flex justify-between w-full">
                <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                  <svg class=" fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>               
                  40 min
                </span>
                <span class=" inline-flex items-center leading-none text-sm">
                  <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                    <path fill="#D8D8D8" d="M9.2 6.583v11.08h3.5V6.583zm6.4 11.084h3.5V3h-3.5z"/>
                    <path fill="#667EEA" d="M2.6 17.667h3.5v-7.334H2.6z"/></g></svg>
                    Débutant
                </span>
              </div>

            </div>
          </div>

          <div class="xl:w-1/3 md:w-1/2 p-4">
            <div class="border border-gray-300 p-6 rounded-lg">
              <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 italic">
                <span class="font-bold text-sm ">
                  Php
                </span>
              </div>
              <h2 class="text-lg  font-medium title-font mb-2">Guide complet des dates en PHP</h2>
              <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>

              <div class="text-center mt-2 leading-none flex justify-between w-full">
                <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                  <svg class=" fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>               
                  40 min
                </span>
                <span class=" inline-flex items-center leading-none text-sm">
                  <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                    <path fill="#D8D8D8" d="M9.2 6.583v11.08h3.5V6.583zm6.4 11.084h3.5V3h-3.5z"/>
                    <path fill="#667EEA" d="M2.6 17.667h3.5v-7.334H2.6z"/></g></svg>
                    Débutant
                </span>
              </div>
            </div>
          </div>
          <div class="xl:w-1/3 md:w-1/2 p-4">
            <div class="border border-gray-300 p-6 rounded-lg">
              <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                <svg class=" fill-current h-6 w-6 " viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>CSS3 icon</title><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"/></svg>
              </div>
              <h2 class="text-lg  font-medium title-font mb-2">CSS avancé</h2>
              <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
              
              <div class="text-center mt-2 leading-none flex justify-between w-full">
                <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                  <svg class=" fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>               
                  2h 40 min
                </span>
                <span class=" inline-flex items-center leading-none text-sm">
            
                  <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                      <path fill="#D8D8D8" d="M15.6 17.667h3.5V3h-3.5z"/>
                      <path fill="#667EEA" d="M9.2 6.583v11.08h3.5V6.583z"/>
                      <path fill="#667EEA" d="M2.6 17.667h3.5v-7.334H2.6z"/>
                    </g>
                  </svg>
                    Débutant
                </span>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog  body-font">
      <div class="max-w-6xl mx-auto px-5 py-24">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
          <h1 class="text-3xl sm:text-2xl font-medium title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl"> Blog</h1>
          <p class="lg:w-1/2 w-full leading-relaxed text-base">
            J'aime bien partager mes connaissances et des recherche intéressantes, pour le faire j'ai mis en place un blog personnel.
						Nous abordons plusieurs sujets intéressants et je donne quelques astuces et conseils aux jeunes développeurs pour mieux s'en sortir.  </p>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
          @forelse ($articles as $article)
              {{$article }}
              <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto ">
                <div class=" w-70 -mt-10 shadow-lg rounded-lg overflow-hidden p-5 bg-gray-800">
                  
                  <div class="header-content inline-flex ">
                    <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-purple-100">
                      <div class="h-2 w-2 rounded-full m-1 bg-purple-500 " ></div>
                    </div>
                    <div class="category-title flex-1 text-sm"> {{ $article->category->name }}</div>
                  </div>
                  <div class="title-post font-medium">{{$article->title}} </div>
    
                  <div class="summary-post text-sm">. 
                  </div>
                 
                </div>
              </div>
          @empty
              
          @endforelse

          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
            <div class=" w-70 -mt-10 shadow-lg rounded-lg overflow-hidden p-5 bg-gray-800">
              
              <div class="header-content inline-flex ">
                <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-yellow-100">
                  <div class="h-2 w-2 rounded-full m-1 bg-yellow-500 " ></div>
                </div>
                <div class="category-title flex-1 text-sm"> JS</div>
              </div>
              <div class="title-post font-medium">Mon titre</div>

              <div class="summary-post text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              </div>
             
            </div>
          </div>

          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
            <div class=" w-70 -mt-10 shadow-lg rounded-lg overflow-hidden p-5 bg-gray-800">
              
              <div class="header-content inline-flex ">
                <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-green-100">
                  <div class="h-2 w-2 rounded-full m-1 bg-green-500 " ></div>
                </div>
                <div class="category-title flex-1 text-sm"> Vue</div>
              </div>
              <div class="title-post font-medium">Mon titre</div>

              <div class="summary-post text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              </div>
             
            </div>
          </div>
         
        </div>
      </div>
    </section>
</div>

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

  <script>
    /* typed effect */
    window.onload = function () {
      new Typed ('.typed', {
        strings: ["<span class='bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-blue-700'>Entrepreneur</span>","<span class='bg-clip-text text-transparent bg-gradient-to-r from-orange-500 to-orange-700'>Dev Full Stack.</span>", "<span class='bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-purple-800'>Web designer</span> "],
        typeSpeed: 100,
          loop: true,
          startDelay: 1000,
          backDelay: 1000,
          // fadeOut: true,
      });
    }
  </script>
    
@endpush
