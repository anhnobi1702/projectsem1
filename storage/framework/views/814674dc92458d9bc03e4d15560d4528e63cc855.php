
<?php $__env->startSection('main'); ?>
    <div class="row">
        <?php if(session('alert')): ?>
            <section class='alert alert-<?php echo e(session('color')); ?>'><?php echo e(session('alert')); ?></section>
        <?php endif; ?>  
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Code</th>
                    <th scope="col">Value</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Condition</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $coupon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="col"><?php echo e($key + 1); ?></th>
                        <th scope="col"><?php echo e($item->code); ?></th>
                        <?php if($item->condition == 0): ?>
                            <th scope="col">$<?php echo e($item->value); ?></th>
                        <?php endif; ?>
                        <?php if($item->condition == 1): ?>
                            <th scope="col"><?php echo e($item->value); ?>%</th>
                        <?php endif; ?>
                        <th scope="col"><?php echo e($item->quantity); ?></th>
                        <th scope="col" class="<?php echo e($item->status == 0 ? 'text-success' : 'text-danger'); ?>">
                            <?php echo e($item->status == 0 ? 'Con' : 'Het'); ?></th>
                        <?php if($item->condition == 0): ?>
                            <th scope="col">Money Reduction</th>
                        <?php endif; ?>
                        <?php if($item->condition == 1): ?>
                            <th scope="col">% Off Money</th>
                        <?php endif; ?>
                        <th scope="col"><a href="<?php echo e(route('coupon.edit', $item->id)); ?>" class="btn btn-primary">Update</a>
                        </th>
                        <form action="<?php echo e(route('coupon.destroy', $item->id)); ?>" method="POST">
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

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/admin/coupon/index.blade.php ENDPATH**/ ?>