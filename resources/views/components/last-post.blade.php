<div>
    @foreach ($lastposts as $post )
        <li>
            <a href="{{ route('article.show', $post->slug) }} " class=" hover:text-gray-800">{{ $post->title }}</a>
        </li>
    @endforeach
</div>
