<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <a href="/toDos/create" class="btn = btn-primary">Create ToDo</a>
                    <h3 class="mt-2">Your ToDos</h3>
                    <?php if(count($posts) > 0): ?>
                    <table class="table table-striped">
                        <tr>
                            <th>title</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($post->name); ?></td>
                                <td><?php echo e($post->status->type); ?></td>
                                <td><a href="/toDos/<?php echo e($post->id); ?>/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    <?php echo Form::open(['action' => ['ToDosController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                    <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                                    <?php echo Form::close(); ?>                                  
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table> 
                    <?php else: ?>
                    <p>You Have no ToDos</p>                  
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\gapp\resources\views/home.blade.php ENDPATH**/ ?>