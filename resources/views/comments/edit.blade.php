<h1>Edit Comment</h1>
<form action="{{ route('comments.update', [$post->id, $comment->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <textarea name="body" required>{{ $comment->body }}</textarea>
    <button type="submit">Update Comment</button>
</form>
