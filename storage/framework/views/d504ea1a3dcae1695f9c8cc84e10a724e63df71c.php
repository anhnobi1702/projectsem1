
<?php $__env->startSection('main'); ?>
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1>Update Farmer</h1>
            <form action="<?php echo e(route('farmer.update', $old_farmer->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo method_field('put'); ?>;
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="<?php echo e($old_farmer->name); ?>" style="width: 70%" class="form-control"
                        id="">
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
                <div class="form-group">
                    <label for="">Role</label>
                    <input type="text" name="role" value="<?php echo e($old_farmer->role); ?>" style="width: 70%" class="form-control"
                        id="">
                </div>
                <?php $__errorArgs = ['role'];
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
                    <div style="width: 70%" class="mr-3">
                        <label for="">Avatar</label>
                        <br>
                        <img src="<?php echo e(url('uploads')); ?>/<?php echo e($old_farmer->avatar); ?>" style="width: 20%" alt="">
                        <div style="height: 20px;"></div>
                        <label for="apply" class="lablez"><input type="file" name="file" class="inputz" id="apply">Get
                            Image</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/admin/farmer/edit.blade.php ENDPATH**/ ?>