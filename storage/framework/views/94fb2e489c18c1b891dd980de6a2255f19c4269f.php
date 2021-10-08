
<?php $__env->startSection('main'); ?>

    <div class="row">
        <div class="col-md-6 offset-3">
            <h1>Update coupon</h1>
            <form action="<?php echo e(route('coupon.update', $old_coupon->id)); ?>" method="post">
                <?php echo method_field('put'); ?>;
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" name="code" style="width: 70%" value="<?php echo e($old_coupon->code); ?>"
                        value="<?php echo e(old('code')); ?>" class="form-control" id="">
                    <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Condition</label>
                        <br>
                        <select name="condition" id="condition">
                            <option <?php echo e($old_coupon->condition==0?"selected":""); ?> value="0">Money Reduction</option>
                            <option <?php echo e($old_coupon->condition==1?"selected":""); ?> value="1">% off money </option>
                        </select>
                    </div>
                    <label for="">Value</label>
                    <input type="number" name="value" style="width: 70%" value="<?php echo e($old_coupon->value); ?>"
                        value="<?php echo e(old('value')); ?>" class="form-control" id="">
                    <?php $__errorArgs = ['value'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <label for="">Quantity</label>
                    <input type="number" name="quantity" style="width: 70%" value="<?php echo e($old_coupon->quantity); ?>"
                        value="<?php echo e(old('quantity')); ?>" class="form-control" id="">
                    <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <label for="">Status</label>
                    <br>
                    <select name="status">
                        <option <?php echo e($old_coupon->status == 0 ? 'selected' : ''); ?> value="0">Con</option>
                        <option <?php echo e($old_coupon->status == 1 ? 'selected' : ''); ?> value="1">Het</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/admin/coupon/edit.blade.php ENDPATH**/ ?>