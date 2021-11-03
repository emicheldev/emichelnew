@section('title', $article->title)

@section('meta')
    <x-meta.article :article="$article" />
@endsection

@push('styles')
  <link rel="stylesheet" href=" " crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
@endpush

<section class="relative block" style="height: 500px;">
    <div
      class="absolute top-0 w-full h-full bg-center bg-cover"
      style='background-image: url("{{ $article->image }} ");'
    >
      <span
        id="blackOverlay"
        class="absolute w-full h-full bg-black opacity-50"
      ></span>
    </div>
    <div
      class="absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden pointer-events-none"
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
          class="fill-current text-gray-50"
          points="2560 0 2560 100 0 100"
        ></polygon>
      </svg>
    </div>
</section>

<section class="relative py-16">
    <div class="container px-4 mx-auto">
      <div
        class="relative flex flex-col w-full min-w-0 mb-6 -mt-64 break-words bg-white rounded-lg shadow-xl"
      >
        <div class="px-6">
          <div class="flex flex-wrap ">
            <div
              class="flex justify-center w-full px-4 lg:w-3/12"
            >
              <div class="relative">
                <img
                  alt="{{$article->author->name}}"
                  src="{{ $article->author->avatar }}"
                  class="absolute h-auto -ml-20 align-middle border-none rounded-full shadow-xl -m-9 lg:-ml-16"
                  style="max-width: 8rem;"
                />
              </div>
            </div>

            <div class="w-full px-4 lg:w-5/12 ">
              <div class="flex justify-center py-4 pt-8 lg:pt-4">

                <div class="flex flex-row p-3 mr-4 text-center text-gray-500">
                  <span class="text-sm ">{{ $article->author->name}}</span>
                </div>

                <div class="flex flex-row p-3 mr-4 text-center text-gray-500">
                  <svg class="h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="text-sm ">
                    {{  $article->created_at->format('d M/Y')}}</span>
                </div>

                <div class="flex flex-row p-3 mr-4 text-center text-gray-500">
                  <svg class="h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                  </svg>
                  <span class="text-sm ">{{ getEstimateReadingTime($article->content)}}</span>
                </div>

              </div>
            </div>
          </div>
          <div class="mt-12 ">
            <div class="">
              <h1 class="text-4xl font-extrabold leading-10 tracking-tight text-center text-gray-800 sm:text-5xl sm:leading-none md:text-6xl ">{{ $article->title}} </h1>
            </div>
            <div class="flex flex-wrap justify-center">
              <div class="w-full px-4 mt-10 mb-2 text-gray-700 lg:w-9/12 ">
                {{ $article->description}}
              </div>
            </div>

          </div>
          <div class="py-10 mt-10 border-t border-gray-300 ">
            <div class="">
              <div class="flex justify-center w-full px-4">
                  <p class="flex prose lg:prose-xl">
                    {!! ($article->content) !!}
                  </p>
              </div>
                <div class="flex justify-center w-full px-4">
                    <p class="mt-10 text-center" data-line-start="0" data-line-end="3">
                        <span class="text-4xl font-bold">...</span> <br>
                        Je sais que je ne
                        suis pas parfait,<br> si vous trouvez des erreurs dans ce poste, faites-moi
                        signe 😊. <br>
                        Si vous avez des questions, n’hésitez pas à me contacter ! <br>
                        suivez-moi sur <a class="text-indigo-600" href="https://twitter.com/emichel_dev">Twitter</a>, <a class="text-indigo-600" href="shorturl.at/etHLQ">Youtube</a> et <a class="text-indigo-600" href="https://github.com/emicheldev">GitHub</a> !
                    </p>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
</section>

@include('includes.newsletter')


<section class="container px-6 mx-auto my-10">

    <section class="flex flex-wrap -mx-4 -mt-4 -mb-10 sm:-m-4">
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
            <x-slot name="bgcolor">
                {{ $popular->category->bgcolor }}
            </x-slot>

            <x-slot name="name">
                {{ $popular->category->name}}
            </x-slot>
            <x-slot name="description">
                {{ $popular->description}}
            </x-slot>
            <x-slot name="author">
                {{ $popular->author->name }}
            </x-slot>
            <x-slot name="avatar">
                {{ $article->author->avatar }}
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
  <script type="text/javascript" src="{{ asset('js/prism.js') }}"></script>
@endpush
