<h1>Comments for Post: {{ $post->title }}</h1>
<a href="{{ route('comments.create', $post->id) }}">Add Comment</a>
<ul>
    @foreach ($post->comments as $comment)
        <li>
            <p>{{ $comment->body }}</p>
            <a href="{{ route('comments.edit', [$post->id, $comment->id]) }}">Edit</a>
            <form action="{{ route('comments.destroy', [$post->id, $comment->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
<a href="{{ route('posts.show', $post->id) }}">Back to Post</a>
