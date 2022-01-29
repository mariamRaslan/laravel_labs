<?php $__env->startSection('title'); ?> Create <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
 
  <div class="card-header">
    <h5 class="card-title">Post Info</h5>
  </div>
  <div class="card-body">
  <h5 class="card-title"><?php echo e($title); ?>:</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <h5 class="card-title">Description:</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>

</div>

<div class="card mt-5">
 
  <div class="card-header">
    <h5 class="card-title">Post Creator Info</h5>
  </div>
  <div class="card-body">
  <h5 class="card-title ">Name:-<small class="fw-normal">Ahmed</small></h5>
    <h5 class="card-title">Email:- <small class="fw-normal">ahmed@gmail.com</small></h5>
    <h5 class="card-title">Created At:- <small class="fw-normal">thurasday 25th of December 1975 02:15:16 PM</small></h5>
   
  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blog/resources/views/posts/show.blade.php ENDPATH**/ ?>