<option>---------SELECT DISCTRICTS ADDRESS---------</option>
<?php $__currentLoopData = $district; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($item->maqh); ?>"><?php echo e($item->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/customer/master/select.blade.php ENDPATH**/ ?>