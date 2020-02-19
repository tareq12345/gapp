 

 <?php $__env->startSection('content'); ?>
    <h1>Posts</h1>
    <?php if(count($posts) > 0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="">
                        <h3> <a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a> </h3>
                    </div>
                    <small>written on <?php echo e($post->created_at); ?> by <?php echo e($post->user['name']); ?></small>
                </li>
                <div class="mb-4"></div>
            </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($posts->links()); ?>

    <?php else: ?>
        <p>No posts found</p>
    <?php endif; ?>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/posts/index.blade.php ENDPATH**/ ?>