
<?php $__env->startSection('main'); ?>
    <div class="row">
        
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $list_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="col"><?php echo e($key); ?></th>
                        <th scope="col"><?php echo e($value->name); ?></th>
                        <th scope="col"><?php echo e($value->status == 0 ? 'Active' : 'Deactivated'); ?></th>
                        <th scope="col"><a class="btn btn-primary" href="<?php echo e(route('category.edit',$value->id)); ?>">Update</a></th>
                        <form action="<?php echo e(route('category.destroy', $value->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <th scope="col"><Button class="btn btn-danger" >Remove</Button></th>
                        </form>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\lastProject\resources\views/admin/category/index.blade.php ENDPATH**/ ?>