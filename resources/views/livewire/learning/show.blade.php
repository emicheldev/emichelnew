
@section('meta')
<x-meta.course :course="$course" />
@endsection

@push('styles')
  <link rel="stylesheet" href=" " crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
@endpush

<section class="overflow-hidden bg-purple-900 bg-learncour" >
    <main class="max-w-6xl mx-auto py-1/12">
        <h2 class="text-2xl font-extrabold leading-10 tracking-tight text-gray-50 sm:text-3xl sm:leading-none md:text-4xl">
          {{ $course->title }}
        </h2>
        <div class="flex flex-row w-1/2 mt-5 space-x-5 text-xs font-medium text-gray-50">
          <div class=""> {{ $course->duration }}</div>
          <div class="flex items-center expanded-card-meta-length">
              <svg width="13" height="13" viewBox="0 0 13 13" class="mr-2 "><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path></svg><span>1h 17m</span>
          </div>
          <div class="">Actualisé le {{ $course->updated_at->format('d/m/Y') }}</div>
        </div>
    </main>
</section>
<section class="text-gray-700 body-font ">
      <div class="flex flex-wrap max-w-6xl mx-auto -m-4">
        <div class="w-full my-10 -mt-20 bg-white">
          <div class="flex-col p-8 mx-5 sm:flex-row">
              <div class="presentation">
                <h2 class="mb-3 font-bold text-indigo-600 title-font">Présentation</h2>
                @if ( $course->youtube_id)
                    <div class="my-5 aspect-w-16 aspect-h-9">
                        <iframe class="w-full" src="https://www.youtube.com/embed/{{ $course->youtube_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe>
                    </div>
                @endif
                <p class="prose-sm prose sm:prose lg:prose-lg xl:prose-xl"> {!! $course->introduction !!} </p>
              </div>
              <div class="mt-12 prerequis ">
                <h2 class="mb-3 font-bold text-indigo-600 title-font">Prérequis </h2>
                <p class="prose lg:prose-xl">{!! $course->prerequisites !!}</p>
              </div>

              {{-- <div class="flex justify-center mt-5">
                <a href="{{ route('detailcours')}} " class="px-10 py-3 text-lg font-semibold text-white bg-blue-500 rounded-full hover:bg-blue-400">Commencer</a>
              </div> --}}

          </div>
        </div>

        <div class="w-full">
            <div class="mb-10 text-lg leading-loose " >
              @include('includes.course_sidebar' )
            </div>
        </div>

    </div>
</section>

@push('scripts')
  <script type="text/javascript" src="{{ asset('js/prism.js') }}"></script>
@endpush
