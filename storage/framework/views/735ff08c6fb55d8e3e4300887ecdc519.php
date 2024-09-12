<h1>All Posts</h1>
<a href="<?php echo e(route('posts.create')); ?>">Create New Post</a>
<ul>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="<?php echo e(route('posts.show', $post->id)); ?>"><?php echo e($post->title); ?></a>
            <a href="<?php echo e(route('posts.edit', $post->id)); ?>">Edit</a>
            <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Delete</button>
            </form>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /home/tecca/crud-app/resources/views/posts/index.blade.php ENDPATH**/ ?>