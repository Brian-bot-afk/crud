<h1>{{ $category->name }}</h1>
<p>Posts in this Category:</p>
<ul>
    @foreach ($category->posts as $post)
        <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>
    @endforeach
</ul>
<a href="{{ route('categories.index') }}">Back to Categories</a>
