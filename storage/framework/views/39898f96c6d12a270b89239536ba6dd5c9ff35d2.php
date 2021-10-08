
<?php $__env->startSection('main'); ?>
    <div class="row">
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $order_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="col"><?php echo e($key+1); ?></th>
                        <th scope="col"><?php echo e($item->name); ?></th>
                        <th scope="col"><img style="width: 120px;height: 120px;" src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>" alt=""></th>
                        <th scope="col"><?php echo e($item->quantity); ?></th>
                        <th scope="col">$<?php echo e($item->price); ?></th>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PROJECT_SEM1\PROJECT_SEM1\lastProject\resources\views/admin/order/orderdetail.blade.php ENDPATH**/ ?>