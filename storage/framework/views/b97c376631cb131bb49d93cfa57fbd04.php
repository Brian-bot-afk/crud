<h1>Create User</h1>
<form action="<?php echo e(route('users.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Create User</button>
</form>
<?php /**PATH /home/tecca/crud-app/resources/views/users/create.blade.php ENDPATH**/ ?>