


<?php $__env->startSection('content'); ?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
        <?php endif; ?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($post->id); ?></th>
      <td><?php echo e($post->title); ?></td>
      <td><?php echo e($post->description); ?></td>
      <td>
        <a href="<?php echo e(route('posts.edit',$post->id)); ?>" class="btn btn-success">Edit</a>
        <a href="<?php echo e(route('posts.delete',$post->id)); ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

</div>
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Authlara\Authapp\resources\views/posts/all-posts.blade.php ENDPATH**/ ?>