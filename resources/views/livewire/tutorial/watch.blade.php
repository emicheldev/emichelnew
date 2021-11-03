@section('title', $item->items[0]->snippet->title)

{{-- @section('meta')
    <x-meta.article :article="$article" />
@endsection --}}

@push('styles')
  <link rel="stylesheet" href=" " crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
@endpush

<section class="relative block" style="height: 500px;">
    <div
      class="absolute top-0 w-full h-full bg-center bg-cover"
      style='background-image: url("{{ $item->items[0]->snippet->thumbnails->medium->url }} ");'
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
              {{-- <div class="relative">
                <img
                  alt="{{$item->items[0]->snippet->channelTitle}}"
                  src="{{ $item->items[0]->snippet->avatar }}"
                  class="absolute h-auto -ml-20 align-middle border-none rounded-full shadow-xl -m-9 lg:-ml-16"
                  style="max-width: 8rem;"
                />
              </div> --}}
            </div>

            <div class="w-full px-4 lg:w-5/12 ">
              <div class="flex justify-center py-4 pt-8 lg:pt-4">

                <div class="flex flex-row p-3 mr-4 text-center text-gray-500">
                  <span class="text-sm ">{{ $item->items[0]->snippet->channelTitle}}</span>
                </div>

                <div class="flex flex-row p-3 mr-4 text-center text-gray-500">
                  <svg class="h-5 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="text-sm ">
                    {{ date('d M Y', strtotime($item->items[0]->snippet->publishedAt)) }}
                 </span>
                </div>


              </div>
            </div>
          </div>
          <div class="mt-12 ">
            <div class="">
              <h1 class="text-4xl font-extrabold leading-10 tracking-tight text-center text-gray-800 sm:text-5xl sm:leading-none md:text-6xl ">{{ $item->items[0]->snippet->title}} </h1>
            </div>
            <div class="flex flex-wrap justify-center">
              <div class="w-full px-4 mt-10 mb-2 text-gray-700 lg:w-9/12 ">
                {{ $item->items[0]->snippet->description }}
              </div>
            </div>

          </div>
          <div class="py-10 mt-10 border-t border-gray-300 ">
            <div class="flex flex-wrap justify-center">
              <div class="w-full px-4 lg:w-9/12">
                <p class="mb-4 text-lg leading-relaxed text-gray-800">
                  <div class="prose lg:prose-xl">
                    {{ $item->items[0]->snippet->description }}
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


@push('scripts')
  <script type="text/javascript" src="{{ asset('js/prism.js') }}"></script>
@endpush
