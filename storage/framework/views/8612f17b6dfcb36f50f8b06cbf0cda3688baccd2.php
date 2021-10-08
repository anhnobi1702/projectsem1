
<?php $__env->startSection('main'); ?>
    <div class="row">
        <?php if(session('alert')): ?>
            <section class='alert alert-<?php echo e(session('color')); ?>'><?php echo e(session('alert')); ?></section>
        <?php endif; ?>  
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Status</th>
                    <th scope="col">Reply</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="col"><?php echo e($key+1); ?></th>
                        <th scope="col"><?php echo e($item->name); ?></th>
                        <th scope="col"><?php echo e($item->email); ?></th>
                        <th scope="col"><?php echo e($item->phone); ?></th>
                        <th scope="col"><?php echo e($item->comment); ?></th>
                        <th scope="col" class="<?php echo e($item->status==0?"text-warning":"text-success"); ?>"><?php echo e($item->status==0?"Chua xu li":"Da xu li"); ?></th>
                        <th scope="col" ><a class="btn btn-primary" href="<?php echo e(route('contact.contact_reply',$item->id)); ?>">Reply</a></th>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PROJECT_SEM1\PROJECT_SEM1\lastProject\resources\views/admin/FormContact/index.blade.php ENDPATH**/ ?>