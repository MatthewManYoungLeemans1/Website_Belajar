<?php $__env->startSection('container'); ?>
    <h1 class="mb-5">Halaman Blog Posts</h1>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="mb-4 border-bottom pb-4">
            <h2>
                <a href="/posts/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a>
            </h2>
            <p>By. <a href="#"><?php echo e($post->user->name); ?></a> in <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a></p>
            <p><?php echo e($post->excerpt); ?></p>
            <a href="/posts/<?php echo e($post->slug); ?>">Read More...</a>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\Website_Belajar\resources\views/posts.blade.php ENDPATH**/ ?>