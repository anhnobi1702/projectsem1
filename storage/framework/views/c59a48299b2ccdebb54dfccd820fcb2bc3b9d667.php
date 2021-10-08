
<?php $__env->startSection('main'); ?>
    <form action="<?php echo e(route('category.update', $old->id)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input style="width: 20%" value="<?php echo e($old->name); ?>" name="name" type="text" class="form-control">
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
        <select class="form-select" name="status" aria-label="Default select example">
            <option <?php echo e($old->status == 0 ? 'checked' : ''); ?> value="0">Con</option>
            <option <?php echo e($old->status == 1 ? 'checked' : ''); ?> value="1">Het</option>
        </select>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>