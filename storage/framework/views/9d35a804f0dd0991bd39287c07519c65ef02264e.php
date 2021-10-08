
<?php $__env->startSection('main'); ?>

    <div class="row">
        <?php if(session('alert')): ?>
            <section class='alert alert-success'><?php echo e(session('alert')); ?></section>
        <?php endif; ?>  
        <?php echo csrf_field(); ?>
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Title</th>
                    <th scope="col">Role</th>
                    <th scope="col">Image</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php echo csrf_field(); ?>
                <?php $__currentLoopData = $farmer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($key + 1); ?></th>
                        <td><?php echo e($value->name); ?></td>
                        <td><?php echo e($value->role); ?></td>
                        <td><img class="" style="width:180px;height:200px"
                                src="<?php echo e(url('uploads')); ?>/<?php echo e($value->avatar); ?>" alt="">
                        </td>
                        <td><a class="btn-sm btn-primary" href="<?php echo e(route('farmer.edit', $value->id)); ?>">Update</a>
                        </td>
                        <form action="<?php echo e(route('farmer.destroy', $value->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <td><button class="btn-sm btn-danger">Remove</button>
                            </td>
                        </form>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/admin/farmer/index.blade.php ENDPATH**/ ?>