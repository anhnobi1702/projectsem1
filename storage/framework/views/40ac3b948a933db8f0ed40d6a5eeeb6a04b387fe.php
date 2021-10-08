
<?php $__env->startSection('main'); ?>
    <form action="<?php echo e(route('config.update',$config->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <label for="exampleInputEmail1">Type</label>
        <select id="type" onchange="type_config()" style="width: 20%" class="form-control" name="type">
            <option <?php echo e($config->type=='text'?"selected":""); ?> value="text">Text</option>
            <option <?php echo e($config->type=='file'?"selected":""); ?> value="file">File</option>
        </select>
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input style="width: 20%" value="<?php echo e($config->name); ?>" name="name" type="text" class="form-control">
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
        <?php if($config->type=='file'): ?>
            <img style="width: 100px;height: 100px;" src="<?php echo e(url('uploads')); ?>/<?php echo e($config->content); ?>" alt="">
        <?php endif; ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Content</label>
            <input id="in" style="width: 20%" name="<?php echo e($config->type); ?>" value="<?php echo e($config->content); ?>" type="<?php echo e($config->type); ?>" class="form-control">
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
            <option <?php echo e($config->status==0?"selected":""); ?> value="0">Active</option>
            <option <?php echo e($config->status==1?"selected":""); ?> value="1">Deactivated</option>
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

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PROJECT_SEM1\PROJECT_SEM1\lastProject\resources\views/admin/config/edit.blade.php ENDPATH**/ ?>