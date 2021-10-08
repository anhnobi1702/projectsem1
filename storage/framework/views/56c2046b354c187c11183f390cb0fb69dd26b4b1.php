
<?php $__env->startSection('main'); ?>
    <form action="<?php echo e(route('config.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="exampleInputEmail1">Type</label>
        <select id="type" onchange="type_config()" style="width: 20%" class="form-control" name="type">
            <option value="text">Text</option>
            <option value="file">File</option>
        </select>
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
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
        <div class="form-group">
            <label for="exampleInputEmail1">Content</label>
            <input id="in" style="width: 20%" name="content" type="text" class="form-control">
        </div>
        <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <select style="width: 20%" class="form-control" name="status" aria-label="Default select example">
            <option value="0">Het</option>
            <option selected value="1">Con</option>
        </select>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script>
        function type_config() {
           type_input = $("#type").val();

            $("#in").attr({type:type_input,name:type_input}) ;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/admin/config/add.blade.php ENDPATH**/ ?>