<?php $__env->startSection('content'); ?>
    <a href="/posts" class="btn btn-default">Go back</a>
    <h1><?php echo e($post->title); ?></h1>
    <div>
        <?php echo $post->body; ?>

    </div>
    <hr>
    <small>written on <?php echo e($post->created_at); ?></small>
    <hr>
    <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-default">Edit</a>
    <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

        <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>