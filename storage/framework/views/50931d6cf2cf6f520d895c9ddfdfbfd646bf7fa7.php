
<?php $__env->startSection('main'); ?>
    <form action="<?php echo e(route('brand.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input style="width: 20%" name="name" type="text" class="form-control">
        </div>
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
        <label for="exampleInputEmail1">Logo</label>
        <div class="form-group d-flex">
            <div style="width: 20%" class="mr-3">
                <label for="apply" class="lablez"><input type="file" name="file" class="inputz" id="apply">Get
                    Image</label>
            </div>
        </div>
        <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <select class="form-select" name="status" aria-label="Default select example">
            <option value="0">Active</option>
            <option value="1">Deactivate</option>
        </select>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/admin/brand/add.blade.php ENDPATH**/ ?>