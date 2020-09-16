@extends('layouts.app')
@section('content')
    <section class=" px-6 h-36 bg-blue-100 py-5 border-blue-500 border-b" >
        <div class="container flex justify-end  px-6 mx-auto md:flex">
                <div class="w-full md:w-1/2">
                    <div class="max-w-lg">
                        <h1 class="text-blue-600 text-xl font-black uppercase md:text-xl">PHP</h1>
                        <p class=" text-gray-600 text-sm">
                            PHP is a general-purpose scripting language that is especially suited to web development.
                        </p>
                    </div>
                </div>
        
                <div class=" flex justify-end mt-6 md:mt-0 md:w-1/2 ">
                    <svg class="h-24 fill-current text-blue-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>PHP icon</title><path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"/></svg>
                </div>
        </div>
    </section>

    <section class="text-gray-700 body-font">
        <div class="container px-5 py-10 mx-auto">
          <div class="-my-8">
            <div class="py-8 flex flex-wrap text-sm">
              <div class="w-full sm:w-1/6 md:mb-0 mb-6 flex-shrink-0 flex flex-col overflow-y-auto scrolling-touch h-screen">

                <span class="text-gray-500 ">Filtrer les résultats</span>

                <div class="flex flex-col border-b border-gray-200">
                    <span class="font-bold my-2 "> Types</span>
                    <label class="inline-flex items-center mb-2 ">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Ecrits</span>
                    </label>
                    <label class="inline-flex items-center mb-2 ">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Vidéos</span>
                    </label>
                    <label class="inline-flex items-center mb-5">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Livres</span>
                    </label>        
                </div>

                <div class="flex flex-col border-b border-gray-200">
                    <span class="font-bold my-2 "> Niveau</span>
                    <label class="inline-flex items-center mb-2 ">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Débutant(27)</span>
                    </label>
                    <label class="inline-flex items-center mb-2 ">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Intermédiaire(179)</span>
                    </label>
                    <label class="inline-flex items-center mb-5">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Avancé(25)</span>
                    </label>        
                </div>

                <div class="flex flex-col border-b border-gray-200">
                    <span class="font-bold my-2 "> Logiciel</span>
                    <label class="inline-flex items-center mb-2 ">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">PHP(27)</span>
                    </label>
                    <label class="inline-flex items-center mb-2 ">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Laravel(7)</span>
                    </label>
                    <label class="inline-flex items-center mb-2 ">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Symfony(27)</span>
                    </label>
                    <label class="inline-flex items-center mb-2 ">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Slim(1)</span>
                    </label>
                    <label class="inline-flex items-center mb-2 ">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">PHPUnit(27)</span>
                    </label>
                    <label class="inline-flex items-center mb-2 ">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Laravel(7)</span>
                    </label>
                    <label class="inline-flex items-center mb-5">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" ><span class="ml-2 text-gray-700 ">Symfony(2)</span>
                    </label>        
                </div>
              </div>

              <div class="w-full sm:w-4/6 px-10">
                <span class="text-gray-500 ">67 résultats pour “PHP”</span>
                <div class=" flex py-5 md:flex-row flex-col rounded-lg shadow-lg bg-white my-5 border border-gray-200  ">
                    <div class="mx-5">
                      <img loading=lazy class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/80x80">
                    </div>
                    <div class="flex flex-col md:items-start md:text-left text-center">
                        <a href=" {{ route('course') }} "><h3 class="text-xl font-semibold">Les bases de PHP</h3></a>
                        <div class=" font-light">
                            <span class="mr-5 border-gray-200 border-r pr-5">Par : e. Michel </span> <span> Publié le 8 mai 2018</span>
                        </div>
                        <div class="flex w-full mt-2">
                                <div class="w-3/4 justify-center m-2">
                                    <div class=" bg-gray-200 rounded-lg ">
                                        <div class="bg-blue-500 text-xs  h-1 rounded-lg" style="width: 45%"></div>
                                    </div>
                                </div>
                                <div class="w-1/4 ">45 %</div>
                        </div>
                    </div>
                </div>

                <div class=" flex py-5 md:flex-row flex-col rounded-lg shadow-lg bg-white my-5 border border-gray-200 ">
                    <div class="mx-5">
                      <img loading=lazy class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/80x80">
                    </div>
                    <div class="flex flex-col md:items-start md:text-left text-center">
                        <h3 class="text-xl font-semibold">Guide complet des dates en PHP</h3>
                        <div class="  font-light">
                            <span class="mr-5 border-gray-200 border-r pr-5">Par : e. Michel </span> <span> Publié le 8 mai 2018</span>
                        </div>
                        <div class="flex w-full mt-2">
                            <div class="w-3/4 justify-center m-2">
                                <div class=" bg-gray-200 rounded-lg ">
                                    <div class="bg-blue-500 text-xs  h-1 rounded-lg" style="width: 45%"></div>
                                </div>
                            </div>
                            <div class="w-1/4">45 %</div>
                       </div>
                    </div>
                </div>

                <div class=" flex py-5 md:flex-row flex-col rounded-lg shadow-lg bg-white my-5 border border-gray-200 ">
                    <div class="mx-5">
                      <img loading=lazy class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/80x80">
                    </div>
                    <div class="flex flex-col md:items-start md:text-left text-center">
                        <h3 class="text-xl font-semibold">Guide complet des dates en PHP</h3>
                        <div class="  font-light">
                            <span class="mr-5 border-gray-200 border-r pr-5">Par : e. Michel </span> <span> Publié le 8 mai 2018</span>
                        </div>
                        
                    </div>
                </div>

                <div class=" flex py-5 md:flex-row flex-col rounded-lg shadow-lg bg-white my-5 border border-gray-200 ">
                    <div class="mx-5">
                      <img loading=lazy class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/80x80">
                    </div>
                    <div class="flex flex-col md:items-start md:text-left text-center">
                        <h3 class="text-xl font-semibold">Guide complet des dates en PHP</h3>
                        <div class="  font-light">
                            <span class="mr-5 border-gray-200 border-r pr-5">Par : e. Michel </span> <span> Publié le 8 mai 2018</span>
                        </div>
                        <div class="flex w-full mt-2">
                            <div class="w-3/4 justify-center m-2">
                                <div class=" bg-gray-200 rounded-lg ">
                                    <div class="bg-blue-500 text-xs  h-1 rounded-lg" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="w-1/4">90 %</div>
                       </div>
                    </div>
                </div>

                <div class=" flex py-5 md:flex-row flex-col rounded-lg shadow-lg bg-white my-5 border border-gray-200 ">
                    <div class="mx-5">
                      <img loading=lazy class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/80x80">
                    </div>
                    <div class="flex flex-col md:items-start md:text-left text-center">
                        <h3 class="text-xl font-semibold">Guide complet des dates en PHP</h3>
                        <div class="  font-light">
                            <span class="mr-5 border-gray-200 border-r pr-5">Par : e. Michel </span> <span> Publié le 8 mai 2018</span>
                        </div>
                        <div class=" w-full text-green-500 flex justify-start">
                            <svg class="fill-current h-4 w-4 mt-1 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg> 
                            <div class="ml-1">terminé</div>
                        </div>
                    </div>
                </div>
                  
              </div>
              <div class="w-full sm:w-1/6">
                <div class=" p-5">
                    <h3 class="font-bold">Tendances</h3>
                    <p>Lorem.</p>
                    <p>Harum.</p>
                    <p>Vero.</p>
                    <p>Maxime.</p>
                    <p>Repudiandae?</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection