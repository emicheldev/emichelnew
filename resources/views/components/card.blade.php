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