<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
<p>Author: {{ $post->user->name }}</p>
<p>Category: {{ $post->category->name }}</p>
<a href="{{ route('posts.index') }}">Back to Posts</a>
