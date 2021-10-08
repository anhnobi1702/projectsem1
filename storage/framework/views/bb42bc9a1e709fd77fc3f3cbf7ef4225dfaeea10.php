<option>---------SELECT DISCTRICTS ADDRESS---------</option>
<?php $__currentLoopData = $commune; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($item->xaid); ?>"><?php echo e($item->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\XAMPP\htdocs\lastProject\resources\views/customer/master/select2.blade.php ENDPATH**/ ?>