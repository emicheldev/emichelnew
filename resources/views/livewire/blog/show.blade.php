@push('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.22.0/themes/prism-okaidia.min.css" integrity="sha512-mIs9kKbaw6JZFfSuo+MovjU+Ntggfoj8RwAmJbVXQ5mkAX5LlgETQEweFPI18humSPHymTb5iikEOKWF7I8ncQ==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.22.0/plugins/line-numbers/prism-line-numbers.min.css" integrity="sha512-cbQXwDFK7lj2Fqfkuxbo5iD1dSbLlJGXGpfTDqbggqjHJeyzx88I3rfwjS38WJag/ihH7lzuGlGHpDBymLirZQ==" crossorigin="anonymous" />
@endpush

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
            <div class="">
              <h1 class="text-center text-gray-800 text-4xl tracking-tight leading-10 font-extrabold sm:text-5xl sm:leading-none md:text-6xl ">{{ $article->title}} </h1>
            </div>
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
                  <div class="prose lg:prose-xl">
                    {!! ($article->content) !!}
                </div>
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
        @foreach($populars as $popular)
        <x-card>
          <x-slot name="image">
              {{ $popular->image}}
          </x-slot>
          <x-slot name="title">
              {{ $popular->title}}
          </x-slot>
          <x-slot name="color">
              {{ $popular->category->color}}
          </x-slot>
          <x-slot name="name">
              {{ $popular->name}}
          </x-slot>
          <x-slot name="description">
              {{ $popular->description}}
          </x-slot>
          <x-slot name="author">
              {{ $popular->author->name }}
          </x-slot>
          <x-slot name="slug">
              {{ $popular->slug }}
          </x-slot>
          <x-slot name="view_count">
              {{ $popular->view_count }}
          </x-slot>
          <x-slot name="created_at">
              {{ $popular->created_at->diffForHumans() }}
          </x-slot>
      </x-card>
        @endforeach

    </section>

</section>


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.22.0/prism.min.js" integrity="sha512-9+422Bs3A87UkWfp+qV80Nfv9arhbCXKY1rxrF2seorI36mIIstMiuBfyKLF1yH1nnzQkEWq2xrzT4XU3Z+vrA==" crossorigin="anonymous"></script>
<script src="https://myCDN.com/prism@v1.x/plugins/autoloader/prism-autoloader.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.22.0/plugins/line-numbers/prism-line-numbers.min.js" integrity="sha512-1oLZvExT5RaW4q2GgvRPf+XzVVGmsKirfZBRN7aifdOpvZ1L9idEncfMFlfHiQNGBA+Sev+alscSAT/xQ0rwXA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.22.0/components/prism-csharp.min.js" integrity="sha512-qvSIQfI/qEeMC1E1LMSPCsDl8vFzl0rkBfF6dDcnMJxQT+8M2WjSyDGqHQzZa+RChv3jkdKnZAo99BcAbGsnQg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.22.0/plugins/normalize-whitespace/prism-normalize-whitespace.min.js" integrity="sha512-VTY+zyTivsIMZ+ANMHvwsnz0hIRHyu/I+7vLqaGaQs//PnQEuNyrLsCwNYo64H92vHojvj2Oiq7bfli0fTSDkQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.21.0/components/prism-php.min.js" integrity="sha512-fQCy56gpSU/8TvlAAoligfXHeW1OmwtV4b+xzo39Nx4lfp/wsA81S6YlrkrDqSAA0U8nWe2dX4OtUtnud72BJA==" crossorigin="anonymous"></script>

@endpush
