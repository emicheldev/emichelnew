@push('styles')
  <link rel="stylesheet" href=" " crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
@endpush

<section class="max-w-6xl px-5 py-10 mx-auto ">
    <h1 class="mb-5 text-3xl font-semibold">{{ $episode->title }}</h1>
    <div class="flex flex-wrap">
        <div class="w-full md:pr-8 md:w-4/5">
            <div class="aspect-w-16 aspect-h-9">
                <iframe class="w-full" src="https://www.youtube.com/embed/{{ $episode->youtube_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe>
            </div>
            <div class="mt-8 text-xs text-purple-600">
                <button class="px-5 py-3 border border-purple-600 rounded-full">
                    Télécharger la vidéo
                </button>
                <a  href="{{$episode->ressource}} " class="px-5 py-3 border border-purple-600 rounded-full">
                    Code source
                </a>

            </div>
            <div class="mt-8 text-base about_course">
                <p class="prose lg:prose-xl">{!! $episode->content !!}</p>
            </div>
        </div>
        <div class="w-full md:w-1/5">
            @include('includes.course_sidebar' ) 
        </div>
    </div>
</section>

@push('scripts')
  <script type="text/javascript" src="{{ asset('js/prism.js') }}"></script>
@endpush
