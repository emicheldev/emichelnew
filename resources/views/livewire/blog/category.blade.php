<div>
    <section class="container mx-auto px-6 my-1 flex flex-wrap -m-4" x-data=" active: '' ">
        <div class="p-2 md:w-40 ">
            <div class="flex items-center p-4 bg-gray-200 
                rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100 "
            wire:click="$set('searchCategory', '')"
            >
                
                <div>
                  <p class=" text-xs font-medium ml-2 ">
                   Tous
                  </p>
                  
                </div>
              </div>
          </div>
        @foreach ($categories as $category)
            <div class="p-2 md:w-40 ">
              <div class="flex items-center p-4 
                  rounded-lg shadow-xs cursor-pointer hover:bg-{{$category->color}}-500 hover:text-gray-100 "
              wire:click="$set('searchCategory', '{{$category->name}}')"
              style="background-color: {{$category->color}}  "
              >
                  {!! $category->icon !!}
                  <div>
                    <p class=" text-sm font-medium ml-2 ">
                     {{ $category->name}}
                    </p>
                    
                  </div>
                </div>
            </div>
        @endforeach
    </section>
</div>
