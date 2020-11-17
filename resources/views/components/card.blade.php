<div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
    <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url({{$image }} )"></div>

    <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
        
        <div class="header-content ">
           <div class="flex justify-between text-sm">
               <div class="inline-flex">
               <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 " style="background-color: {{$bgcolor }}">
                        <div class="h-2 w-2 rounded-full m-1 " style="background-color: {{$color }}" ></div>
                    </div>
                    <div class="category-title flex-1"> {{ $name}}</div>
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
        <div class="title-post font-medium text-base "><a href="{{ route('article.show', $slug) }}">{{ $title, 10 }}</a> </div>
        <div class="summary-post text-gray-700 text-sm">{{ Str::limit($description, 50)}} 
            <div class="flex justify-between items-center mt-4">
                <div class="flex items-center">
                    <img src="https://user.oc-static.com/users/avatars/15970109488563_profil.jpg"
                        class="w-8 h-8 object-cover rounded-full" alt="{{ $author  }}">
                    <a class="text-gray-700 text-sm mx-3" href="#">{{ $author  }}</a>
                </div>
                <span class="font-light text-sm text-gray-600">{{$created_at }}</span>
            </div>
        </div>
    </div>
</div>