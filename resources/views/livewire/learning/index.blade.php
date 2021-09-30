<section class="px-6 py-5 bg-blue-100 border-b border-blue-500 " >
  <div class="flex flex-col justify-start max-w-6xl px-5 mx-auto mt-4 mb-10 ">
          <h1 class="text-2xl md:text-4xl">Cours en ligne</h1>
          <p class="text-sm text-gray-600 ">
              {{-- Découvrez tous nos cours et apprenez des nouvelles technologies  --}}
              Plateforme en Construction 🙏
          </p>         
  </div>
</section>

<section class="text-gray-700 body-font">
  <div class="max-w-6xl px-5 py-10 mx-auto ">
    <div class="-my-8">
      <div class="flex flex-wrap py-8 text-sm">
        <div class="flex flex-col flex-shrink-0 w-full h-screen mb-6 overflow-y-auto scrolling-touch sm:w-1/6 md:mb-0">

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
              <label class="inline-flex items-center mb-2 ">
                  <input type="checkbox" class="w-5 h-5 text-blue-600 form-checkbox" ><span class="ml-2 text-gray-700 ">PHP(27)</span>
              </label>
                      
          </div>
        </div>

        <div class="w-full pl-4 sm:w-5/6">

          <div class="flex flex-wrap gap-y-8">
            @foreach ($courses as $course )
                <a href=" {{ route('course_show',$course->slug) }} ">
                  <div class="flex flex-col w-full px-2 sm:w-1/2 md:w-1/3 ">
                    <img loading="lazy" class="w-full rounded-lg" src="{{ $course->image }}" alt="{{ $course->title }}">
                    <span class="mt-2 text-sm font-bold text-gray-900 ">{{ $course->title }}</span>
                    <div class="flex items-center text-xs">
                      <div class="flex items-center mr-4 ">
                        <svg width="13" height="14" viewBox="0 0 13 14" class="mr-2 "><path class="fill-current" fill-rule="nonzero" d="M4.129 6.44v4.873c0 .217-.159.41-.395.481a4.098 4.098 0 0 1-1.167.155c-1.236 0-2.564-.437-2.564-1.398V4.317c-.028-.429.145-1.185.976-1.595.386-.19 2.412-1.314 3.43-1.882A.674.674 0 0 1 5.01.82c.19.09.309.262.309.448v.739c0 .281-.265.51-.591.51-.254 0-.47-.139-.554-.333-.92.51-2.273 1.258-2.61 1.423a.683.683 0 0 0-.38.573c0 .167.041.299.117.37.21.198.909.075 1.671-.32.733-.38 4.346-2.455 4.382-2.476a.67.67 0 0 1 .606-.025.505.505 0 0 1 .313.45v.058c0 .17-.099.329-.263.424 0 0-2.508 1.444-2.73 1.567-.85.472-1.152 1.051-1.152 2.213zM13 3.98V10.6a.498.498 0 0 1-.276.431s-3.445 2.308-4.144 2.675c-.367.193-.835.295-1.352.295-1.228 0-2.499-.574-2.499-1.532V6.14l.002-.006c.012-.373.113-.906.917-1.418C6.13 4.41 9 2.721 9.123 2.65a.674.674 0 0 1 .608-.03.505.505 0 0 1 .315.452v.738c0 .281-.264.51-.59.51a.598.598 0 0 1-.544-.31c-.917.54-2.262 1.337-2.563 1.528-.38.243-.431.403-.438.609.001.152.05.268.146.345.301.238 1.113.138 1.912-.276.592-.307 3.143-2.007 4.076-2.636a.673.673 0 0 1 .623-.056c.203.085.332.262.332.458zm-1.182 2.272L8.865 8.23v1.02l2.953-1.978v-1.02z" opacity=".5"></path></svg>
                        <a class="" href=" {{ route('course') }} ">{{$course->episodes->count()}} Leçons </a>
                      </div>
                      <div class="flex items-center expanded-card-meta-length">
                        <svg width="13" height="13" viewBox="0 0 13 13" class="mr-2 "><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path></svg>
                        <span>{{ convertToHoursMins($course->episodes->sum('duration')) }}</span>
                      </div>
                    </div>
                  </div>
                </a>
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
