<section class="px-6 py-5 bg-blue-100 border-b border-blue-500 " >
  <div class="flex flex-col justify-start max-w-6xl px-5 mx-auto mt-4 mb-10 ">
          <h1 class="text-2xl font-bold md:text-4xl">Cours en ligne</h1>
          <p class="text-sm text-gray-600 ">
              Découvrez tous nos cours et apprenez des nouvelles technologies

          </p>
  </div>
</section>

<section class="text-gray-700 body-font">
  <div class="max-w-6xl px-5 py-10 mx-auto ">
    <div class="-my-8">
      <div class="flex flex-wrap py-8 text-sm">
        {{-- <div class="flex flex-col flex-shrink-0 w-full h-screen mb-6 overflow-y-auto scrolling-touch sm:w-1/6 md:mb-0">

          <span class="text-gray-500 ">Filtrer les résultats</span>

          <div class="flex flex-col border-b border-gray-200 gap-y-2">
              <span class="my-2 font-bold "> Type</span>

              <label class="inline-flex items-center">
                <input type="checkbox" class="w-5 h-5 text-blue-600 form-checkbox" ><span class="ml-2 text-gray-700 ">Cours</span>
              </label>
              <label class="inline-flex items-center mb-5 ">
                  <input type="checkbox" class="w-5 h-5 text-blue-600 form-checkbox" ><span class="ml-2 text-gray-700 ">Tutoriels</span>
              </label>
          </div>

          <div class="flex flex-col ">
              <span class="my-2 font-bold "> Thème</span>
               {{dump($selectcategory)}}
              @foreach ( $categories as $categorie )

              <label class="inline-flex items-center mb-2 ">
                  <input type="checkbox" class="w-5 h-5 text-blue-600 form-checkbox" value="{{$categorie->id}}" wire:model="selectcategory" >
                  <span class="ml-2 text-gray-700 ">
                    {{ $categorie->name }} ({{ $categorie->courses->count() }})
                  </span>
              </label>
              @endforeach

          </div>
        </div> --}}

        <div class="w-full">

          <div class="flex flex-wrap gap-y-8">
            @foreach ($courses as $course )
                @include('includes.course_card')
            @endforeach

            {{-- <div class="grid w-full grid-cols-1 gap-6 mt-4 sm:grid-cols-2 lg:grid-cols-3 ">
              @for ($i=1; $i<=9; $i++)

                <div class="relative w-full p-4 overflow-hidden bg-white rounded-lg shadow hover:shadow-md">
                  <div class="flex flex-col animate-pulse">
                    <div class="w-full h-40 bg-gray-200 rounded"></div>
                    <div class="flex flex-col mt-5">
                    <div class="w-full h-5 bg-gray-200 rounded"></div>
                    <div class="w-10/12 h-3 mt-2 bg-gray-200 rounded"></div>
                    <div class="w-8/12 h-3 mt-2 bg-gray-200 rounded"></div>
                    </div>


                    <div class="flex items-center mt-5">
                    <div>
                      <div class="w-10 h-10 bg-gray-200 rounded-full"></div>
                    </div>
                    <div class="flex justify-between w-full ml-3">
                      <div class="w-5/12 h-3 bg-gray-200 rounded"></div>
                      <div class="w-2/12 h-3 bg-gray-200 rounded"></div>
                    </div>
                    </div>
                  </div>
                </div>
              @endfor
            </div> --}}

          </div>

        </div>
      </div>
    </div>
  </div>
</section>
