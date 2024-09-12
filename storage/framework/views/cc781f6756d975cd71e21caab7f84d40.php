<h1>Create Category</h1>
<form action="<?php echo e(route('categories.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Category Name" required>
    <button type="submit">Create Category</button>
</form>
<?php /**PATH /home/tecca/crud-app/resources/views/categories/create.blade.php ENDPATH**/ ?>