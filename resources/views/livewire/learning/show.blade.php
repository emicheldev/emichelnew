<section class="overflow-hidden bg-purple-900 bg-learncour" >
    <main class="max-w-6xl mx-auto py-1/12">
        <h2 class="text-2xl font-extrabold leading-10 tracking-tight text-gray-50 sm:text-3xl sm:leading-none md:text-4xl">
          Les bases de PHP : Introduction
        </h2>
        <div class="flex flex-row w-1/2 mt-5 space-x-5 text-xs font-medium text-gray-50">
          <div class="">Temps de lecture 3 min</div>
          <div class="flex items-center expanded-card-meta-length">
              <svg width="13" height="13" viewBox="0 0 13 13" class="mr-2 "><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path></svg><span>1h 17m</span>
          </div>
          <div class="">Actualisé le 25/06/2021</div>
        </div>
    </main>
</section>
  
<section class="text-gray-700 body-font ">
      <div class="flex flex-wrap max-w-6xl mx-auto -m-4">
        <div class="my-10 -mt-20 bg-white lg:w-4/6 md:w-full">
          <div class="flex-col p-8 mx-5 sm:flex-row">
              <div class="presentation">
                <h2 class="mb-3 font-bold text-indigo-600 title-font">Présentation</h2>
                <p>Bonjour et bienvenue dans ce cours !
                  Les nouvelles façons de transmettre un savoir ou une compétence vous intéressent ?
                  Peut-être que vous avez déjà un sujet précis en tête, que vous avez un cours à réaliser. Et vous vous dites : "Quoi de mieux que le web pour le diffuser !"
                  Mais vous vous demandez comment faire concrètement.
                  Vous avez envie de savoir quelles méthodes utiliser ? Quelle plateforme choisir ? Quel ton adopter ?
                  Ne bougez pas, vous êtes au bon endroit ! Dans ce cours, vous apprendrez comment gérer chaque étape de la création d’un cours en ligne.
                </p>
              </div>
              <div class="mt-12 prerequis ">
                <h2 class="mb-3 font-bold text-indigo-600 title-font">Prérequis </h2>
                <p>Bonjour et bienvenue dans ce cours !
                  Les nouvelles façons de transmettre un savoir ou une compétence vous intéressent ?
                  Peut-être que vous avez déjà un sujet précis en tête, que vous avez un cours à réaliser. Et vous vous dites : "Quoi de mieux que le web pour le diffuser !"
                  Mais vous vous demandez comment faire concrètement.
                  Vous avez envie de savoir quelles méthodes utiliser ? Quelle plateforme choisir ? Quel ton adopter ?
                  Ne bougez pas, vous êtes au bon endroit ! Dans ce cours, vous apprendrez comment gérer chaque étape de la création d’un cours en ligne.
                </p>
              </div>

              <div class="flex justify-center mt-5">
                <a href="{{ route("detailcours")}} " class="px-10 py-3 text-lg font-semibold text-white bg-blue-500 rounded-full hover:bg-blue-400">Commencer</a>

              </div>
      
          </div>
        </div>
        
        <div class="p-4 lg:w-2/6 md:w-full">
          <div class="container px-5 py-2 mx-auto" x-data="{
            faqs: [
                {
                    question: 'Why do I need Alpine JS?',
                    answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iure quas laudantium dicta impedit, est id delectus molestiae deleniti enim nobis rem et nihil.',
                    isOpen: true,
                },
                {
                    question: 'Why am I so awesome?',
                    answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque, nulla harum aspernatur veniam ullam provident neque temporibus autem itaque odit.',
                    isOpen: false,
                },
                {
                    question: 'Why learn on Scrimba?',
                    answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque, nulla harum aspernatur veniam ullam provident neque temporibus autem itaque odit.',
                    isOpen: false,
                },
            ]
                }">
            <div class="mt-6 mr-10 text-lg leading-loose " >
              <span class="text-xl">Table des matières</span>
              <template x-for="faq in faqs " :key="faq.question" >
                <div class="">
                  <button class="flex items-center justify-between w-full py-3 mt-4 font-bold border-b border-gray-400"
                    @click="faqs = faqs.map(f => ({ ...f, isOpen: f.question !== faq.question ? false : !f.isOpen}))"><!-- Specs has it that only one component can be open at a time and also you should be able to toggle the open state of the active component too -->
                    <div class="text-indigo-600">Base</div>
                   
                    <svg x-show="!faq.isOpen" width="24" height="24" class="" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    
                      <svg x-show="faq.isOpen"  width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                  </button>
  
                  <div class="mt-2 text-sm text-gray-700"  x-show="faq.isOpen">
                    <a href="#">lorem 1</a>
                    <br>
                    <a href="#">lorem 2</a>
                    <br>
                    <a href="#">lorem 3</a>
                    <br>
                    <a href="#">lorem 4</a>
                    <br>
                    <a href="#">lorem 5</a>
                    <br>
                    <a href="#">lorem 6</a>
                    <br>
                    <a href="#">lorem 7</a>
                    <br>
                    <a href="#">lorem 8</a>
                    <br>
                    <a href="#">lorem 9</a>
                    <br>
                    <a href="#">lorem 10</a>
                    <br>
                  </div>
                </div>
              </template>
  
            </div>
          </div>
        </div>
        
    </div>
</section>
  