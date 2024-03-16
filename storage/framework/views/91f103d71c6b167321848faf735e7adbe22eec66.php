<?php $__env->startSection('container'); ?>
    <article>
        <h2><?php echo e($post->title); ?></h2>
        <p>By. <a href="#"><?php echo e($post->user->name); ?></a> in <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a></p>
        <?php echo $post->body; ?>

    </article>
    <a href="/posts">Back To Blog</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Website_Belajar\resources\views/post.blade.php ENDPATH**/ ?>