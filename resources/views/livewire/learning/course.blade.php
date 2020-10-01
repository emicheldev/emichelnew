<section class="h-screen bg-learncour bg-purple-900 overflow-hidden ">
  <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mt-2/12">
    <div class="sm:text-center lg:text-left">
      <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-50 sm:text-5xl sm:leading-none md:text-6xl">
        Les bases de PHP : Introduction
      </h2>
      <div class="flex flex-row justify-between mt-5 text-base text-gray-50  font-medium w-1/2">
        <div class="">Temps de lecture
          <br>
          <span class="text-gray-500">3 min</span>
        </div>
        <div class="ml-20">Publié
          <br>
          <span class="text-gray-500">3 min</span>
        </div>
        <div class="ml-20">Actualisé
          <br>
          <span class="text-gray-500">3 min</span>
        </div>
      </div>
    </div>
  </main>
</section>

<section class="text-gray-700 body-font ">
    <div class="flex flex-wrap -m-4 max-w-6xl mx-auto">
      <div class="lg:w-4/6 md:w-full -mt-20 bg-white my-10">
        <div class=" p-8 sm:flex-row flex-col mx-5 ">
         
          <div class="flex-grow">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">The Catalyzer</h2>
            A PHP script starts with the and ends with the tag.

            The PHP delimiter <code class="bg-gray-900 p-2 m-2 rounded text-xs text-yellow-300 ">html </code> in the following example simply tells the PHP engine to treat the enclosed code block as PHP code, rather than simple HTML.

            </p>
            <h1 class="text-gray-900 text-3xl title-font font-bold mb-2">Body</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam distinctio consequatur, quidem soluta optio vitae rerum ipsum a accusamus! Fugit aliquam maiores hic laboriosam dicta quos omnis, earum unde officia.</p>
            @php
            $htmlpage  ='
<body>
<h1>This is a Heading</h1>
<p>This is a paragraph.</p>
</body>'
            @endphp

            <pre class=""><code class="language-html">{{$htmlpage}}</code></pre>

            <p>Neque reiciendis repudiandae, dolorem rem soluta debitis assumenda nihil veritatis quam dignissimos ipsa? Ex odit pariatur eligendi quo quas, vitae quae assumenda aliquam, tempora excepturi reprehenderit id ducimus aliquid natus.</p>

            <p>Explicabo sed neque enim? Cupiditate sint dolorum recusandae distinctio suscipit voluptas quod, ipsa possimus odio enim laudantium soluta harum quasi quisquam velit corrupti repudiandae laborum officia neque? In, magnam eveniet!</p>
            <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80" alt="image">
            <p class="my-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor blanditiis iure optio suscipit quaerat expedita, unde assumenda culpa quisquam laudantium quam similique eos exercitationem maxime facilis quasi vel pariatur ex.</p>
            <p class="py-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil laborum mollitia explicabo autem quis molestiae sunt, officiis ratione praesentium possimus libero, cumque at eum temporibus, ipsum velit maxime ab aut?</p>
            <p class="py-5">Accusamus voluptas suscipit totam cum laborum voluptate ipsum quasi quibusdam, ducimus id alias quae optio excepturi hic consequatur assumenda debitis quis adipisci perspiciatis, officia similique dolorem impedit aut molestias. Nihil.</p>
            <p class="py-5">Recusandae excepturi omnis unde soluta placeat maiores non? Ab molestiae quasi maxime necessitatibus. Incidunt blanditiis magnam odit sapiente, ut odio esse asperiores, quibusdam reiciendis voluptatem doloribus non fuga hic earum!</p>
          </div>
        </div>
      </div>
      
      <div class="p-4 lg:w-2/6 md:w-full">
        <div class="container mx-auto px-5 py-2" x-data="{
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
          <div class="leading-loose text-lg mt-6 mr-10 " >
            <template x-for="faq in faqs " :key="faq.question" >
              <div class="">
                <button class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                  @click="faqs = faqs.map(f => ({ ...f, isOpen: f.question !== faq.question ? false : !f.isOpen}))"><!-- Specs has it that only one component can be open at a time and also you should be able to toggle the open state of the active component too -->
                  <div class="text-indigo-600">Base</div>
                 
                  <svg x-show="!faq.isOpen" width="24" height="24" class="" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                  
                    <svg x-show="faq.isOpen"  width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                </button>

                <div class="text-gray-700 text-sm mt-2"  x-show="faq.isOpen">
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
