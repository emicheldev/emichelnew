@section('title', 'Blog')

@section('meta')
    <x-meta.general description="Blog pour les devs 👨‍💻 et les designers 🎨 écrit par les devs et designers, un point c'est tout 😉 "
    title="Blog | e.Michel"
    />
@endsection

<div class="">
    <section class="container px-6 mx-auto my-10">
        <div class="relative flex items-center justify-center px-4 py-6 mt-6 text-gray-100 bg-indigo-700 rounded-lg sm:py-12 lg:py-20 sm:px-6 lg:px-12">
            <div class="">
                <h1 class="mb-2 text-2xl leading-snug text-center sm:text-left sm:text-3xl text-secondary">Un <strong class="underline">Blog</strong> pour les devs 👨‍💻 et les designers 🎨</h1> 
                <p class="mb-6 text-center sm:text-left sm:text-lg lg:pr-12">écrit par les devs et designers, un point c'est tout 😉 !</p> 
                <div class="h-16 sm:pr-12">
                    <div class="relative">
                        <input wire:model="searchArticle" type="text" name="query" placeholder="Recherche" required="required" autocomplete="off" class="w-full p-4 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-gray-400"
                        > 
                    </div>
                </div> 
            </div> 
        </div>
    </section>
    
    @include('livewire.blog.category', $categories)
    
    <section class="container px-6 mx-auto my-10">
        <section class="flex flex-wrap -mx-4 -mt-4 -mb-10 sm:-m-4">

            @forelse ($articles as $article)
                <x-card>
                    <x-slot name="image">
                        {{ $article->image}}
                    </x-slot>
                    <x-slot name="title">
                        {{ $article->title}}
                    </x-slot>
                    <x-slot name="color">
                        {{ $article->color}}
                    </x-slot>
                    <x-slot name="bgcolor">
                        {{ $article->color}}
                    </x-slot>
                    <x-slot name="name">
                        {{ $article->name}}
                    </x-slot>
                    <x-slot name="description">
                        {{ $article->description}}
                    </x-slot>
                    <x-slot name="author">
                        {{ $article->author->name }}
                    </x-slot>
                    <x-slot name="slug">
                        {{ $article->slug }}
                    </x-slot>
                    <x-slot name="view_count">
                        {{ $article->view_count }}
                    </x-slot>
                    <x-slot name="avatar">
                        {{ $article->author->avatar }}
                    </x-slot>
                    <x-slot name="created_at">
                        {{ $article->created_at->diffForHumans() }}
                    </x-slot>
                </x-card>
            @empty
                <div class="text-3xl text-center">Je ne retrouve pas {{$searchArticle }} 😓</div>
            @endforelse 
            
        </section>
        <div class="my-10">
            {{ $articles->links() }}

        </div>
    </section>
</div>