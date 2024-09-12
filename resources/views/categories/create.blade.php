<h1>Create Category</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Category Name" required>
    <button type="submit">Create Category</button>
</form>
