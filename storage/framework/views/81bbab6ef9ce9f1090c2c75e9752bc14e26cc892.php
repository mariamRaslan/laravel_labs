<?php $__env->startSection('title'); ?>Index <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <div class="text-center">
            <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success">Create Post</a>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
             <?php $__currentLoopData = $allPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <th scope="row"><?php echo e($post->id); ?></th>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e(isset($post->user) ? $post->user->name : 'Not Found'); ?></td>
                <td><?php echo e($post->created_at->format("Y-m-d")); ?></td>
                <td>
                    <a href="<?php echo e(route('posts.show',$post->id)); ?>" class="btn btn-primary">View</a>
                    <a href="<?php echo e(route('posts.edit',$post->id)); ?>" class="btn btn-success">Edite</a>
                    <!-- <a href="<?php echo e(route('posts.destroy',$post->id)); ?>" class="btn btn-danger">Delete</a> -->
                    <form method="POST" action="<?php echo e(route('posts.destroy',$post->id)); ?>"  style="display:inline">
                                        <?php echo e(csrf_field()); ?> <?php echo e(method_field('DELETE')); ?>

                                        <button type="submit" id='delete' class="btn btn-danger">Delete</button>
                                    </form>
                    
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <div class="d-flex justify-content-center">
    <?php echo $allPosts->links(); ?>

</div>

<script>
            const del=document.getElementById('delete');
            del.addEventListener('click',function(e){
                const c=confirm("You Sure Continue Deleted !");
                if(c == false){
                   e.preventDefault();
                }
            })
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blog/resources/views/posts/index.blade.php ENDPATH**/ ?>