<section class="relative block" style="height: 500px;">
    <div
      class="absolute top-0 w-full h-full bg-center bg-cover"
      style='background-image: url("{{ $article->image }} ");'
    >
      <span
        id="blackOverlay"
        class="w-full h-full absolute opacity-50 bg-black"
      ></span>
    </div>
    <div
      class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
      style="height: 70px; transform: translateZ(0px);"
    >
      <svg
        class="absolute bottom-0 overflow-hidden"
        xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="none"
        version="1.1"
        viewBox="0 0 2560 100"
        x="0"
        y="0"
      >
        <polygon
          class="text-gray-50 fill-current"
          points="2560 0 2560 100 0 100"
        ></polygon>
      </svg>
    </div>
</section>
<section class="relative py-16">
    <div class="container mx-auto px-4">
      <div
        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
      >
        <div class="px-6">
          <div class="flex flex-wrap ">
            <div
              class="w-full lg:w-3/12 px-4 flex justify-center"
            >
              <div class="relative">
                <img
                  alt="..."
                  src="https://user.oc-static.com/users/avatars/15970109488563_profil.jpg"
                  class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16"
                  style="max-width: 8rem;"
                />
              </div>
            </div>
        
            <div class="w-full lg:w-5/12 px-4 ">
              <div class="flex justify-center py-4 lg:pt-4 pt-8">

                <div class="mr-4 p-3 text-gray-500 text-center flex flex-row">
                  <span class="text-sm ">{{ $article->author->name}}</span>
                </div>

                <div class="mr-4 p-3 text-gray-500 text-center flex flex-row">
                  <svg class="h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>  
                  <span class="text-sm ">
                    {{  $article->created_at->format('d M/Y')}}</span>
                </div>

                <div class="mr-4 p-3 text-gray-500 text-center flex flex-row">
                  <svg class="h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                  </svg>  
                  <span class="text-sm ">{{ getEstimateReadingTime($article->content)}}</span>
                </div>
               
              </div>
            </div>
          </div>
          <div class=" mt-12">
            <h3
              class=" text-center text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
            >
            {{ $article->title}} 
            </h3>
            <div class="flex flex-wrap justify-center">
              <div class="mb-2 text-gray-700 w-full lg:w-9/12 mt-10 px-4 ">
                {{ $article->description}} 
              </div>
            </div>
            
          </div>
          <div class="mt-10 py-10 border-t border-gray-300 ">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-9/12 px-4">
                <p class="mb-4 text-lg leading-relaxed text-gray-800">
                  {{ $article->content}} 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

@include('includes.newsletter')


<section class="container mx-auto px-6 my-10">

    <section class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
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

                <div class="summary-post text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                <button class="bg-blue-100 text-blue-500 mt-4 block rounded p-1 text-xs "><span class="">Lire plus</span></button>
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

                <div class="summary-post text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                <button class="bg-blue-100 text-blue-500 px-2 mt-4 block rounded p-1 text-xs"><span class="">Lire plus</span></button>
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

                <div class="summary-post text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                <button class="bg-blue-100 text-blue-500 px-2 mt-4 block rounded p-1 text-xs"><span class="">Lire plus</span></button>
                </div>
            
            </div>
        </div>
    </section>

</section>
