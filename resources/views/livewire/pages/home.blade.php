@extends('layouts.app')

@section('content')
   <section class="max-w-6xl mx-auto px-6 element">
        <div class="md:flex items-center">
                <div class="w-full md:w-1/2">
                    <div class="max-w-lg">
                        <h1 class="text-gray-800 text-6xl font-black uppercase md:text-3xl">Qui suis-je ?</h1>
                        <p class="mt-2 text-gray-600">
                            Je suis développeur web et designer freelance, mes temps libres je les passe dans la toile afin d'apprendre plus. Satisfaire mes clients est ma priorité.
                        </p>
                    </div>
                </div>
        
                <div class="flex items-center justify-center w-full mt-6 md:mt-0 md:w-1/2">
                    <img loading=lazy src="/images/emichel_profil.svg" alt="php" class="h-full w-full"  srcset="">
                </div>
        </div>
   </section>

    <section class="skills text-gray-700 body-font element">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
          <div class="text-center mb-20">
            <div class="flex justify-center">
              <div class="w-14 h-14 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 p-2 ">
                <svg viewBox="0 0 20 20" fill="currentColor" class="academic-cap w-14 h-14 "><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path></svg>
              </div>
            </div>
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Compétences</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">L'informatique est vaste et les langages naissent presque à tout moment, je fais tout mon possible pour être à la hauteur afin de répondre au besoin de mes clients et d'apporter de l'aide aux nouveaux développeurs.</p>
            <div class="flex mt-6 justify-center">
              <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
            </div>
          </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
            <div class="p-2 md:w-1/2 md:mb-0 mb-6 flex flex-col  ">
              <div class="w-14 h-14 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-2">
                <svg class="fill h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M136.6 138.79a64.003 64.003 0 0 0-43.31 41.35L0 460l14.69 14.69L164.8 324.58c-2.99-6.26-4.8-13.18-4.8-20.58 0-26.51 21.49-48 48-48s48 21.49 48 48-21.49 48-48 48c-7.4 0-14.32-1.81-20.58-4.8L37.31 497.31 52 512l279.86-93.29a64.003 64.003 0 0 0 41.35-43.31L416 224 288 96l-151.4 42.79zm361.34-64.62l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.75 18.75-49.15 0-67.91z"/></svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Webdesign</h2>
                <p class="leading-relaxed text-base">Le webdesign est l'association de deux mots, web et design qui signifient littéralement "toile" et "dessiner", il est donc l'action de dessiner pour le web. Il nous faut cependant nous pencher plus en avant sur la définition du design, appelée aussi graphisme pour mieux définir le webdesign.</p>
              </div>
            </div>
            <div class="p-4 md:w-1/2 md:mb-0 mb-6 flex flex-col ">
              <div class="w-14 h-14 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-5 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                  <circle cx="6" cy="6" r="3"></circle>
                  <circle cx="6" cy="18" r="3"></circle>
                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Intégration web</h2>
                <p class="leading-relaxed text-base">
                  Comme l’intitulé de son poste l’indique, l’intégrateur web (également appelé développeur front ou intégrateur HTML) intègre les pages d’un site Internet en « traduisant » les projets de l’équipe graphique en langage informatique (le HTML ou XHTML) dans le respect des normes et standards en vigueur (W3C notamment).
                </p>
              </div>
            </div>
            <div class="p-4 md:w-1/2 md:mb-0 mb-6 flex flex-col ">
              <div class="w-14 h-14 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-5 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <div class="flex-grow">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Developpement Back-end</h2>
                <p class="leading-relaxed text-base">
                  Le webdesign est l'association de deux mots, web et design qui signifient littéralement "toile" et "dessiner", il est donc l'action de dessiner pour le web. Il nous faut cependant nous pencher plus en avant sur la définition du design, appelée aussi graphisme pour mieux définir le webdesign.
                </p>
              </div>
            </div>
            <div class="p-4 md:w-1/2 md:mb-0 mb-6 flex flex-col ">
                <div class="w-14 h-14 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-5 flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                <div class="flex-grow">
                  <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Bon code et bonne pratiques</h2>
                  <p class="leading-relaxed text-base">
                    Comme l’intitulé de son poste l’indique, l’intégrateur web (également appelé développeur front ou intégrateur HTML) intègre les pages d’un site Internet en « traduisant » les projets de l’équipe graphique en langage informatique (le HTML ou XHTML) dans le respect des normes et standards en vigueur (W3C notamment).
                  </p>
                </div>
              </div>
          </div>
        </div>
    </section>

    <section class="text-gray-700 body-font bg-blue-50">
      <div class="max-w-6xl mx-auto px-5 py-24 ">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"> DERNIER COURS</h1>
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
              <h2 class="text-lg text-gray-900 font-medium title-font mb-2">L'essentiel du HTML5 </h2>
              <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
              
              <div class="text-center mt-2 leading-none flex justify-between w-full">
                <span class="text-gray-600 mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                  <svg class=" fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>               
                  40 min
                </span>
                <span class="text-gray-600 inline-flex items-center leading-none text-sm">
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
              <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Guide complet des dates en PHP</h2>
              <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>

              <div class="text-center mt-2 leading-none flex justify-between w-full">
                <span class="text-gray-600 mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                  <svg class=" fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>               
                  40 min
                </span>
                <span class="text-gray-600 inline-flex items-center leading-none text-sm">
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
              <h2 class="text-lg text-gray-900 font-medium title-font mb-2">CSS avancé</h2>
              <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
              
              <div class="text-center mt-2 leading-none flex justify-between w-full">
                <span class="text-gray-600 mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                  <svg class=" fill-current w-4 h-4 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>               
                  2h 40 min
                </span>
                <span class="text-gray-600 inline-flex items-center leading-none text-sm">
            
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
        <button class="flex mx-auto mt-16 text-indigo-600 bg-indigo-200 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 hover:text-white rounded-lg text-lg">Voir tout</button>
      </div>
    </section>

    <section class="blog text-gray-700 body-font">
      <div class="max-w-6xl mx-auto px-5 py-24">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"> Blog</h1>
          <p class="lg:w-1/2 w-full leading-relaxed text-base">
            J'aime bien partager mes connaissances et des recherche intéressantes, pour le faire j'ai mis en place un blog personnel.
						Nous abordons plusieurs sujets intéressants et je donne quelques astuces et conseils aux jeunes développeurs pour mieux s'en sortir.  </p>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
            <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>

            <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
              
              <div class="header-content inline-flex ">
                <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-purple-100">
                  <div class="h-2 w-2 rounded-full m-1 bg-purple-500 " ></div>
                </div>
                <div class="category-title flex-1 text-sm"> PHP</div>
              </div>
              <div class="title-post font-medium">Mon titre</div>

              <div class="summary-post text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                <button class="bg-blue-100 text-blue-500 mt-4 block rounded p-2 text-sm "><span class="">Lire plus</span></button>
              </div>
             
            </div>
          </div>

          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
            <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1543966888-7c1dc482a810?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>

            <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
              
              <div class="header-content inline-flex ">
                <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-yellow-100">
                  <div class="h-2 w-2 rounded-full m-1 bg-yellow-500 " ></div>
                </div>
                <div class="category-title flex-1 text-sm"> JS</div>
              </div>
              <div class="title-post font-medium">Mon titre</div>

              <div class="summary-post text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                <button class="bg-blue-100 text-blue-500 px-2 mt-4 block rounded p-2 text-sm"><span class="">Lire plus</span></button>
              </div>
             
            </div>
          </div>

          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
            <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1590608897129-79da98d15969?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>

            <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
              
              <div class="header-content inline-flex ">
                <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-green-100">
                  <div class="h-2 w-2 rounded-full m-1 bg-green-500 " ></div>
                </div>
                <div class="category-title flex-1 text-sm"> Vue</div>
              </div>
              <div class="title-post font-medium">Mon titre</div>

              <div class="summary-post text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                <button class="bg-blue-100 text-blue-500 px-2 mt-4 block rounded p-2 text-sm"><span class="">Lire plus</span></button>
              </div>
             
            </div>
          </div>
         
        </div>
      </div>
    </section>
@endsection
