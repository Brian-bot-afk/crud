<h1>All Users</h1>
<a href="<?php echo e(route('users.create')); ?>">Create New User</a>
<ul>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="<?php echo e(route('users.show', $user->id)); ?>"><?php echo e($user->name); ?></a>
            <a href="<?php echo e(route('users.edit', $user->id)); ?>">Edit</a>
            <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Delete</button>
            </form>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /home/tecca/Desktop/New Folder/crud-app/resources/views/users/index.blade.php ENDPATH**/ ?>