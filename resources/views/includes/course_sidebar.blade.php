<details class="mb-4 bg-gray-100">
    <summary class="px-4 py-2 font-semibold text-indigo-600 bg-gray-300 rounded-t-lg cursor-pointer">
        Sommaire
    </summary>

    
    @forelse ( $course->episodes as $episode )
     
        @if ($episode->premium)
         @role('premium')
            <a href=" {{ route('episode',[ $course->slug, $episode->slug ]) }} " class=" flex px-4 py-2 text-sm transition duration-300 ease-in border-b-2 
              hover:bg-blue-100 gap-x-2 hover:text-indigo-500
              {{ ($episode->slug == request()->segment(3))  ? 'bg-purple-600 text-gray-100' : ' '}}
              "
              >
              <svg class="w-5 h-5 stroke-current stroke-1"  stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.60846 4.61507C7.1087 4.34314 6.5 4.70491 6.5 5.27386V18.7262C6.5 19.2951 7.1087 19.6569 7.60846 19.385L19.97 12.6588C20.4921 12.3747 20.4921 11.6253 19.97 11.3412L7.60846 4.61507ZM5 5.27386C5 3.56701 6.82609 2.4817 8.32538 3.29749L20.687 10.0236C22.2531 10.8758 22.2531 13.1242 20.687 13.9764L8.32538 20.7025C6.82609 21.5183 5 20.433 5 18.7262V5.27386Z"/>
              </svg>
              <div class="flex flex-col ">
                  {{$episode->title}}
                  <span class="text-xs text-gray-400">{{ $episode->duration }} min</span>
              </div>
            </a>
          @else
            <div class="flex px-4 py-2 text-sm transition duration-300 ease-in border-b-2 hover:bg-blue-100 gap-x-2 hover:text-indigo-500">
              <svg class="w-5 h-5 stroke-current stroke-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
              <div class="flex flex-col ">
                {{$episode->title}}
                <span class="text-xs text-gray-400">{{ $episode->duration }} min</span>
              </div>
            </div>
         @endrole
        @else

            <a href=" {{ route('episode',[ $course->slug, $episode->slug ]) }} " class=" flex px-4 py-2 text-sm transition duration-300 ease-in border-b-2 
                hover:bg-blue-100 gap-x-2 hover:text-indigo-500
                {{ ($episode->slug == request()->segment(3))  ? 'bg-purple-600 text-gray-100' : ' '}}
                "
                >
                <svg class="w-5 h-5 stroke-current stroke-1"  stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.60846 4.61507C7.1087 4.34314 6.5 4.70491 6.5 5.27386V18.7262C6.5 19.2951 7.1087 19.6569 7.60846 19.385L19.97 12.6588C20.4921 12.3747 20.4921 11.6253 19.97 11.3412L7.60846 4.61507ZM5 5.27386C5 3.56701 6.82609 2.4817 8.32538 3.29749L20.687 10.0236C22.2531 10.8758 22.2531 13.1242 20.687 13.9764L8.32538 20.7025C6.82609 21.5183 5 20.433 5 18.7262V5.27386Z"/>
                </svg>
                <div class="flex flex-col ">
                    {{$episode->title}}
                    <span class="text-xs text-gray-400">{{ $episode->duration }} min</span>
                </div>
            </a>
        @endif
        
    @empty
    <a href="#" class="">Pas de course </a>
    @endforelse
   
</details>