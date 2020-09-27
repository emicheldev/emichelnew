<section class="container mx-auto px-6 my-10">
    <div class="bg-indigo-700 mt-6 rounded-lg py-6 sm:py-12 lg:py-20 px-4 sm:px-6 lg:px-12 flex items-center relative flex justify-center text-gray-100">
        <div class=" ">
            <h1 class="text-center sm:text-left text-2xl sm:text-3xl text-secondary mb-2 leading-snug">Un <strong class="underline">Blog</strong> pour les devs 👨‍💻 et les designers 🎨</h1> 
            <p class="text-center sm:text-left sm:text-lg mb-6 lg:pr-12">écrit par les devs et designers, un point c'est tout 😉 !</p> 
            <div class="h-16 sm:pr-12"><form action="/search" class="relative">
                <input type="search" name="query" placeholder="Recherche" required="required" class="p-4 text-gray-700 w-full bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-gray-400"> 
                <button type="submit" class="bg-primary text-white rounded font-lg absolute top-0 right-0 bottom-0 mt-1 mr-1 mb-1 px-8 font-semibold hover:bg-teal-300 focus:outline-none focus:shadow-outline">Search</button>
                </form>
            </div> 
        </div> 
    </div>
</section>

<section class="container mx-auto px-6 my-1 flex flex-wrap -m-4">
    <div class="p-2 md:w-40 ">
        <a href="{{route('topics.php')}} " class="flex items-center p-4 bg-blue-100 rounded-lg shadow-xs cursor-pointer hover:bg-blue-500 hover:text-gray-100">
            
            <img loading=lazy src="/images/icons/subjects/php.svg" alt="php" class="h-5"  srcset="">
            <div>
              <p class=" text-xs font-medium ml-2 ">
                PHP
              </p>
              
            </div>
        </a>
    </div>

    <div class="p-2 md:w-40 ">
        <div class="flex items-center p-4 bg-gray-100 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100">
            
            <img src="/images/icons/subjects/symfony.svg" alt="" class="h-5"  srcset="">
            <div>
              <p class=" text-xs font-medium ml-2 ">
                SYMFONY
              </p>
              
            </div>
        </div>
    </div>
    <div class="p-2 md:w-40 ">
        <div class="flex items-center p-4 bg-orange-100 rounded-lg shadow-xs cursor-pointer hover:bg-orange-500 hover:text-gray-100">
            
            <img src="/images/icons/subjects/html5.svg" alt="" class="h-5"  srcset="">
            <div>
              <p class=" text-xs font-medium ml-2 ">
                HTML
              </p>
              
            </div>
        </div>
    </div>

    <div class="p-2 md:w-40 ">
        <div class="flex items-center p-4 bg-green-100 rounded-lg shadow-xs cursor-pointer hover:bg-green-500 hover:text-gray-100">
            
            <img src="/images/icons/subjects/vue-dot-js.svg" alt="" class="h-5"  srcset="">
            <div>
              <p class=" text-xs font-medium ml-2 ">
                VUE
              </p>
              
            </div>
        </div>
    </div>
    <div class="p-2 md:w-40 ">
        <div class="flex items-center p-4 bg-yellow-100 rounded-lg shadow-xs cursor-pointer hover:bg-yellow-500 hover:text-gray-100">
            
            <img src="/images/icons/subjects/javascript.svg" alt="" class="h-5"  srcset="">
            <div>
              <p class=" text-xs font-medium text-uppercase ml-2 ">
                javascript
              </p>
              
            </div>
        </div>
    </div>
    <div class="p-2 md:w-40 ">
        <div class="flex items-center p-4 bg-indigo-100 rounded-lg shadow-xs cursor-pointer hover:bg-indigo-500 hover:text-gray-100">
            
            <img src="/images/icons/subjects/css3.svg" alt="" class="h-5"  srcset="">
            <div>
              <p class=" text-xs font-medium ml-2 ">
                CSS
              </p>
              
            </div>
        </div>
    </div>
    <div class="p-2 md:w-40 ">
        <div class="flex items-center p-4 bg-red-100 rounded-lg shadow-xs cursor-pointer hover:bg-red-500 hover:text-gray-100">
            
            <img src="/images/icons/subjects/laravel.svg" alt="" class="h-5"  srcset="">
            <div>
              <p class=" text-xs font-medium ml-2 ">
                LARAVEL
              </p>
              
            </div>
        </div>
    </div>


</section>

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

        <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
            <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url(https://images.unsplash.com/photo-1521185496955-15097b20c5fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"></div>

            <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                
                <div class="header-content inline-flex ">
                <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-red-100">
                    <div class="h-2 w-2 rounded-full m-1 bg-red-500 " ></div>
                </div>
                <div class="category-title flex-1 text-sm"> Laravel</div>
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