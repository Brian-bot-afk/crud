<h1>Edit Category</h1>
<form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <input type="text" name="name" value="<?php echo e($category->name); ?>" required>
    <button type="submit">Update Category</button>
</form>
<?php /**PATH /home/tecca/crud-app/resources/views/categories/edit.blade.php ENDPATH**/ ?>