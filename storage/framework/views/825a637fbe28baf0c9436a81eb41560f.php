<h1><?php echo e($post->title); ?></h1>
<p><?php echo e($post->body); ?></p>
<p>Author: <?php echo e($post->user->name); ?></p>
<p>Category: <?php echo e($post->category->name); ?></p>
<a href="<?php echo e(route('posts.index')); ?>">Back to Posts</a>
<?php /**PATH /home/tecca/crud-app/resources/views/posts/show.blade.php ENDPATH**/ ?>