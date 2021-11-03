@section('title', 'Tutoriels | emichel')

@section('meta')
    <x-meta.general description="Blog pour les devs 👨‍💻 et les designers 🎨 écrit par les devs et designers, un point c'est tout 😉 "
    title="Blog | e.Michel"
    />
@endsection

<div>
    <section class="container px-6 mx-auto my-10">
        <div class="relative flex items-center justify-center px-4 py-6 mt-6 text-gray-100 bg-indigo-700 rounded-lg sm:py-12 lg:py-20 sm:px-6 lg:px-12">
            <div>
                <h1 class="mb-2 text-2xl leading-snug text-center sm:text-left sm:text-3xl text-secondary">Les 20 derniers tutos sur ma chaines <a href=" http://shorturl.at/etHLQ" target="_blank" rel="noopener noreferrer">Youtube</a> </h1>
                <p class="mb-6 text-center sm:text-lg lg:pr-12">N'oubliez pas de vous abonner, de liker si vous aimez😉 !</p>

            </div>
        </div>
    </section>

    <section class="container px-6 mx-auto my-10">
        <section class="flex flex-wrap -mx-4 -mt-4 -mb-10 sm:-m-4">
            @forelse ($videos as $key => $item)
            <a href="https://www.youtube.com/watch?v={{ $item->id->videoId }}" target="_blank" rel="noopener">
                <div class="flex flex-col w-full px-2 my-5 sm:w-1/3 md:w-1/4">
                    <img loading="lazy" class="w-full rounded-lg" src="{{ $item->snippet->thumbnails->medium->url}}" alt="{{ $item->snippet->title }}">
                    <span class="mt-2 text-sm font-bold text-gray-900 ">{{ Str::limit($item->snippet->title, 40, '...')  }}</span>
                    <div class="flex items-center text-xs">
                    <div class="flex items-center mr-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                        </svg>
                        <a href="https://www.youtube.com/watch?v={{ $item->id->videoId }}" target="_blank" rel="noopener">Youtube </a>
                    </div>
                    <div class="flex items-center expanded-card-meta-length">
                        <svg width="13" height="13" viewBox="0 0 13 13" class="mr-2 "><path class="fill-current" fill-rule="evenodd" d="M6.5 0C2.925 0 0 2.925 0 6.5S2.925 13 6.5 13 13 10.075 13 6.5 10.075 0 6.5 0zm2.967 9L6 6.913V3h1v3.391l3 1.761L9.467 9z" opacity=".5"></path></svg>
                        <span>{{ date('d M Y', strtotime($item->snippet->publishTime)) }}</span>
                    </div>
                    </div>
                </div>
            </a>

            @empty
                <div class="text-3xl text-center">Je ne retrouve pas {{$searchitem }} 😓</div>
            @endforelse

        </section>
        {{-- <div class="my-10">
            {{ $items->links() }}

        </div> --}}
    </section>
</div>
