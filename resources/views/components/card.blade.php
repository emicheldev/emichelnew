<div class="flex flex-col items-center justify-center w-full max-w-sm p-4 mx-auto mb-6 xl:w-1/4 md:w-2/4 md:mb-0">
    <a href="{{ route('article.show', $slug)}}" class="w-full h-56 bg-gray-300 bg-center bg-cover rounded-lg shadow-md" style="background-image: url({{$image }} )"></a>

    <div class="p-5 -mt-10 overflow-hidden bg-white rounded-lg shadow-lg w-70">

        <div class="header-content ">
           <div class="flex justify-between text-sm">
               <div class="inline-flex items-center">
                    <div class="flex-1 w-4 h-4 m-1 bg-opacity-50 rounded-full category-badge " style="background-color: rgba({{ $color }},0.3) ">
                        <div class="w-2 h-2 m-1 rounded-full " style="background-color: rgba({{ $color }}, 1)" ></div>
                    </div>
                    <div class="flex-1 capitalize category-title"> {{ $name}}</div>
               </div>
               <div class="inline-flex gap-1">
                   <svg class="h-4 mt-0.5" cl xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    <span> {{$view_count }} </span>
                </div>
           </div>
        </div>
        <div class="text-base font-medium title-post "><a href="{{ route('article.show', $slug) }}">{{ $title }}</a> </div>
        <div class="text-sm text-gray-700 summary-post">{{ Str::limit($description, 50)}}
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    <img src="{{ $avatar }}"
                        class="object-cover w-8 h-8 rounded-full" alt="{{ $author  }}">
                    <a class="mx-3 text-sm text-gray-700" href="#">{{ $author  }}</a>
                </div>
                <span class="text-sm font-light text-gray-600">{{$created_at }}</span>
            </div>
        </div>
    </div>
</div>
