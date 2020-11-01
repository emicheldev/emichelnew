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
                <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col justify-center items-center max-w-sm mx-auto">
                    <div class="bg-gray-300 h-56 w-full rounded-lg shadow-md bg-cover bg-center" style="background-image: url({{$article->image }} )"></div>

                    <div class=" w-70 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden p-5">
                        
                        <div class="header-content inline-flex ">
                        <div class="category-badge flex-1  h-4 w-4 m rounded-full m-1 bg-{{$article->color}}-100">
                            <div class="h-2 w-2 rounded-full m-1 bg-{{$article->color}}-500 " ></div>
                        </div>
                        <div class="category-title flex-1 text-sm"> {{ $article->name}}</div>
                        </div>
                        <div class="title-post font-medium"><a href="{{ route('article.show', $article->slug) }}">{{ Str::limit($article->title, 10) }}</a> </div>
                        <div class="summary-post text-gray-700 text-sm">{{ Str::limit($article->description, 50)}} 
                            <div class="flex justify-between items-center mt-4">
                                <div class="flex items-center">
                                    <img src="https://user.oc-static.com/users/avatars/15970109488563_profil.jpg"
                                        class="w-8 h-8 object-cover rounded-full" alt="{{ $article->author->name  }}">
                                    <a class="text-gray-700 text-sm mx-3" href="#">{{ $article->author->name  }}</a>
                                </div>
                                <span class="font-light text-sm text-gray-600">{{$article->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center text-3xl">Je ne retrouve pas {{$searchArticle }} 😓</div>
            @endforelse 
            
        </section>
        {{ $articles->links() }}
    </section>
</div>