<h1>Add Comment to Post: {{ $post->title }}</h1>
<form action="{{ route('comments.store', $post->id) }}" method="POST">
    @csrf
    <textarea name="body" placeholder="Comment" required></textarea>
    <button type="submit">Add Comment</button>
</form>
