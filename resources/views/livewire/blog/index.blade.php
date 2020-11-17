@section('title', 'Blog')

@section('meta')
    <x-meta.general description="Blog pour les devs 👨‍💻 et les designers 🎨 écrit par les devs et designers, un point c'est tout 😉 "
    title="Blog | e.Michel"
    />
@endsection

<div class="">
    <section class="container mx-auto px-6 my-10">
        <div class="bg-indigo-700 mt-6 rounded-lg py-6 sm:py-12 lg:py-20 px-4 sm:px-6 lg:px-12 flex items-center relative flex justify-center text-gray-100">
            <div class=" ">
                <h1 class="text-center sm:text-left text-2xl sm:text-3xl text-secondary mb-2 leading-snug">Un <strong class="underline">Blog</strong> pour les devs 👨‍💻 et les designers 🎨</h1> 
                <p class="text-center sm:text-left sm:text-lg mb-6 lg:pr-12">écrit par les devs et designers, un point c'est tout 😉 !</p> 
                <div class="h-16 sm:pr-12">
                    <div class="relative">
                        <input wire:model="searchArticle" type="text" name="query" placeholder="Recherche" required="required" autocomplete="off" class="p-4 text-gray-700 w-full bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-gray-400"
                        
                        > 
                    </div>
                </div> 
            </div> 
        </div>
    </section>
    
    @include('livewire.blog.category', $categories)
    
    <section class="container mx-auto px-6 my-10">
        <section class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

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
                        {{ $article->bgcolor}}
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
                    <x-slot name="created_at">
                        {{ $article->created_at->diffForHumans() }}
                    </x-slot>
                </x-card>
            @empty
                <div class="text-center text-3xl">Je ne retrouve pas {{$searchArticle }} 😓</div>
            @endforelse 
            
        </section>
        <div class="my-10">
            {{ $articles->links() }}

        </div>
    </section>
</div>