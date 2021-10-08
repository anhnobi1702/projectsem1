
<?php $__env->startSection('main'); ?>

    <div class="row">
        <?php if(session('alert')): ?>
            <section class='alert alert-success'><?php echo e(session('alert')); ?></section>
        <?php endif; ?>  
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Title</th>
                    <th scope="col">Banner</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col"><?php echo e($blog->title); ?></th>
                    <td><img class="" style="width:200px;height:130px" src="<?php echo e(url('uploads')); ?>/<?php echo e($blog->banner); ?>"
                            alt="">
                    </td>
                    <th scope="col"><?php echo e($blog->status==0?"active":"deactivated"); ?></th>
                    <td><a class="btn-sm btn-primary" href="<?php echo e(route('blog.edit', $blog->id)); ?>">Update</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>
        <h2 style="width: 100%;color: black">Content :</h2>
        </p>

        <p style="width: 70%;color: black"><?php echo e($blog->content); ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/admin/blog/detail.blade.php ENDPATH**/ ?>