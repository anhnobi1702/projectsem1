
<?php $__env->startSection('main'); ?>

    <div class="row">
        <div class="col-md-6 offset-3">
            <h1>Update shipping</h1>
            <form action="<?php echo e(route('shipping.update', $old_shipping->id)); ?>" method="post">
                <?php echo method_field('put'); ?>;
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" style="width: 70%" value="<?php echo e($old_shipping->name); ?>"
                        value="<?php echo e(old('name')); ?>" class="form-control" id="">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <label for="">Price</label>
                    <input type="number" name="price" style="width: 70%" value="<?php echo e($old_shipping->price); ?>"
                        value="<?php echo e(old('price')); ?>" class="form-control" id="">
                    <?php $__errorArgs = ['price'];
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
                        <option <?php echo e($old_shipping->status == 0 ? 'selected' : ''); ?> value="0">Con</option>
                        <option <?php echo e($old_shipping->status == 1 ? 'selected' : ''); ?> value="1">Het</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/admin/shipping/edit.blade.php ENDPATH**/ ?>