
<?php $__env->startSection('main'); ?>

    <div class="row">
        <?php if(session('alert')): ?>
            <section class='alert alert-success'><?php echo e(session('alert')); ?></section>
        <?php endif; ?>  
        <?php echo csrf_field(); ?>
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php echo csrf_field(); ?>
                <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($key + 1); ?></th>
                        <td><?php echo e($value->name); ?></td>
                        <td><img class="" 
                                src="<?php echo e(url('uploads')); ?>/<?php echo e($value->logo); ?>" alt="">
                        </td>
                        <td class="<?php echo e($value->status==0?"text-success":"text-danger"); ?>"><?php echo e($value->status==0?"Active":"Deactivate"); ?></td>
                        <td><a class="btn-sm btn-primary" href="<?php echo e(route('brand.edit', $value->id)); ?>">Update</a>
                        </td>
                        <form action="<?php echo e(route('brand.destroy', $value->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <td><button class="btn-sm btn-danger">Remove</button>
                            </td>
                        </form>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\Desktop\PROJECT_SEM1\lastProject\resources\views/admin/brand/index.blade.php ENDPATH**/ ?>