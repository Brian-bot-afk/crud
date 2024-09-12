<h1>Edit User</h1>
<form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <input type="text" name="name" value="<?php echo e($user->name); ?>" required>
    <input type="email" name="email" value="<?php echo e($user->email); ?>" required>
    <input type="password" name="password" placeholder="New Password">
    <button type="submit">Update User</button>
</form>
<?php /**PATH /home/tecca/Desktop/New Folder/crud-app/resources/views/users/edit.blade.php ENDPATH**/ ?>