
<?php $__env->startSection('main'); ?>

    <div class="row">
        <?php if(session('alert')): ?>
            <section class='alert alert-success'><?php echo e(session('alert')); ?></section>
        <?php endif; ?>  
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Blog Name</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Status</th>
                    <th scope="col">Accept</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="col"><?php echo e($key+1); ?></th>
                    <th scope="col"><?php echo e($item->getName->name); ?></th>
                    <th scope="col"><?php echo e($item->getBlogName->title); ?></th>
                    <th scope="col"><?php echo e($item->comment); ?></th>
                    <th scope="col" class="<?php echo e($item->status==1 ?"text-success" : "text-danger"); ?>"><?php echo e($item->status==1 ?"Accept" : "Does not accept"); ?></th>
                    <th scope="col"><a href="<?php echo e(route('accept',$item->id)); ?>" class="btn btn-primary">Accept</a></th>
                    <th scope="col"><a href="<?php echo e(route('removecomment',$item->id)); ?>" class="btn btn-danger">Remove</a></th>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\Desktop\PROJECT_SEM1\lastProject\resources\views/admin/comment/index.blade.php ENDPATH**/ ?>