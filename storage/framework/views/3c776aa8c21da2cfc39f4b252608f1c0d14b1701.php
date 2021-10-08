<?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="<?php echo e(route('order.update', $item->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <?php $name_method = $method->getName($item->shipping_method_id); ?>
    <tr >
        <th scope="col"><?php echo e($key + 1); ?></th>
        <th scope="col"><?php echo e($item->name); ?></th>
        <th scope="col"><?php echo e($item->phone); ?></th>
        <th scope="col"><?php echo e($item->email); ?></th>
        <th scope="col"><?php echo e($item->address); ?></th>
        <th scope="col"><?php echo e($item->quantity); ?></th>
        <th scope="col"><?php echo e($name_method); ?></th>
        <th scope="col"><?php echo e($item->payment_methods == 0 ? 'Cash On Delivery' : 'Online Banking'); ?></th>
        <th scope="col">
            <select name="order_status"  id="order_status">
                <option <?php echo e($item->order_status == 0 ? 'selected' : ' '); ?> value="0">Unpaid</option>
                <option <?php echo e($item->order_status == 1 ? 'selected' : ' '); ?> value="1">Paid</option>
            </select>
        </th>
        <th scope="col">
            <select name="shipping_status"  id="shipping_status">
                <option <?php echo e($item->shipping_status == 0 ? 'selected' : ' '); ?> value="0">No Process
                </option>
                <option <?php echo e($item->shipping_status == 1 ? 'selected' : ' '); ?> value="1">Processed
                </option>
                <option <?php echo e($item->shipping_status == 2 ? 'selected' : ' '); ?> value="2">Delivering
                </option>
                <option <?php echo e($item->shipping_status == 3 ? 'selected' : ' '); ?> value="3">Delivered
                </option>
                <option <?php echo e($item->shipping_status == 4 ? 'selected' : ' '); ?> value="4">Cancelled
                </option>
            </select>
        </th>
        <th scope="col">
            <a onclick="update_order(<?php echo e($item->id); ?>)" class="btn btn-primary text-light">Update</a>
        </th>
        <th scope="col">
            <a href="<?php echo e(route('order.show',$item->id)); ?>" class="btn btn-success">View</a>
        </th>
    </tr>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/admin/order/filterOrder.blade.php ENDPATH**/ ?>