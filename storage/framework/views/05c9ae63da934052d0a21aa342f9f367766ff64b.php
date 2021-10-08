
<?php $__env->startSection('main'); ?>
    <div class="row">
        <?php if(session('alert')): ?>
            <section class='alert alert-<?php echo e(session('color')); ?>'><?php echo e(session('alert')); ?></section>
        <?php endif; ?>  
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $shipping; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="col"><?php echo e($key + 1); ?></th>
                        <th scope="col"><?php echo e($item->name); ?></th>
                        <th scope="col">$<?php echo e($item->price); ?></th>
                        <th scope="col" class="<?php echo e($item->status == 0 ? 'text-success ' : 'text-danger'); ?>">
                            <?php echo e($item->status == 0 ? 'Active ' : 'Deactivated'); ?></th>
                        <th scope="col"><a href="<?php echo e(route('shipping.edit', $item->id)); ?>" class="btn btn-primary">Update</a>
                        </th>
                        <form action="<?php echo e(route('shipping.destroy', $item->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <th scope="col"><button type="submit" class="btn btn-danger">Delete</button></th>
                        </form>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PROJECT_SEM1\PROJECT_SEM1\lastProject\resources\views/admin/shipping/index.blade.php ENDPATH**/ ?>