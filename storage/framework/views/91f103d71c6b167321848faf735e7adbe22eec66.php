<?php $__env->startSection('container'); ?>
    <article>
        <h2><?php echo e($post->title); ?></h2>
        <p>By. Matthew in <?php echo e($post->category->name); ?></p>
        <?php echo $post->body; ?>

    </article>
    <a href="/posts">Back To Blog</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Website_Belajar\resources\views/post.blade.php ENDPATH**/ ?>