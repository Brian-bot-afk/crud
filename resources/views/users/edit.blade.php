<h1>Edit User</h1>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $user->name }}" required>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <input type="password" name="password" placeholder="New Password">
    <button type="submit">Update User</button>
</form>
