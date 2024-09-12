<h1>All Categories</h1>
<a href="<?php echo e(route('categories.create')); ?>">Create New Category</a>
<ul>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="<?php echo e(route('categories.show', $category->id)); ?>"><?php echo e($category->name); ?></a>
            <a href="<?php echo e(route('categories.edit', $category->id)); ?>">Edit</a>
            <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Delete</button>
            </form>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /home/tecca/crud-app/resources/views/categories/index.blade.php ENDPATH**/ ?>