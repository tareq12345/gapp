<?php $__env->startSection('content'); ?>
   <h1>Edit Post</h1>
   <?php echo Form::open(['action' => ['PostsController@update', $post->id] , 'method' => 'POST']); ?>

      <div class="form-group">
         <?php echo e(Form::label('title','title')); ?>

         <?php echo e(Form::text('title', $post->title,['class' => 'form-control' , 'placeholder' => 'title'])); ?>

      </div>

      <div class="form-group">
         <?php echo e(Form::label('body','body')); ?>

         <?php echo e(Form::textarea('body', $post->body,['id' => 'editor', 'class' => 'form-control' , 'placeholder' => 'body'])); ?>

      </div>
      <?php echo e(Form::hidden('_method','PUT')); ?>

      <?php echo e(Form::Submit('Submit',['class' => 'btn btn-primary'])); ?>

    
   <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\blog\resources\views/posts/edit.blade.php ENDPATH**/ ?>