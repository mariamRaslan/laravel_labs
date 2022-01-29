<?php $__env->startSection('title'); ?>Index <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <div class="text-center">
            <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success">Create Post</a>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
             <?php $__currentLoopData = $allPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <th scope="row">1</th>
                <td><?php echo e($post['title']); ?></td>
                <td><?php echo e($post['posted_by']); ?></td>
                <td><?php echo e($post['created_at']); ?></td>
                <td>
                    <a href="<?php echo e(route('posts.show',[$post['title']])); ?>" class="btn btn-primary">View</a>
                    <a href="<?php echo e(route('posts.edit',[$post['title']])); ?>" class="btn btn-success">Edite</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blog/resources/views/posts/index.blade.php ENDPATH**/ ?>