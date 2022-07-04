

<?php $__env->startSection('content'); ?>

<div class="card text-center mt-5 mb-5">
  <div class="card-header">
    #<?php echo e($post->id); ?>

  </div>
  <div>
  <img src="<?php echo e(asset('thumbnails/' . $post->thumbnail)); ?>" class="img-thumbnail" alt="Thumbnail">
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo e($post->title); ?></h5>
    <p class="card-text"><?php echo e($post->description); ?></p>
  </div>
  <div class="card-footer text-muted">
  <?php echo e(date('Y-m-d',strtotime($post->created_at))); ?>

  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Authlara\Authapp\resources\views/posts/show.blade.php ENDPATH**/ ?>