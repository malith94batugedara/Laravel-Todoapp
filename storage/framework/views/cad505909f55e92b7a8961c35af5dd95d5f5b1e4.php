<?php $__env->startSection('content'); ?>


<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

      <div class="row mb-2">

      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <img src="<?php echo e(asset('thumbnails/' . $post->thumbnail)); ?>" class="img-thumbnail" alt="Thumbnail">
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?php echo e($post->title); ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo e(date('Y-m-d',strtotime($post->created_at))); ?></div>
              <p class="card-text mb-auto"><?php echo e($post->description); ?></p>
              <a href="<?php echo e(route('posts.show',$post->id)); ?>">Continue reading</a>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Authlara\Authapp\resources\views/welcome.blade.php ENDPATH**/ ?>