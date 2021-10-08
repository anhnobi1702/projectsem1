
<?php $__env->startSection('main'); ?>
    <form action="<?php echo e(route('contact.post_reply',$info->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <h4 for="exampleInputEmail1">Name : <?php echo e($info->name); ?></h4>
        </div>
        <div class="form-group">
            <h4 for="exampleInputEmail1">Email : <?php echo e($info->email); ?></h4>
        </div>
        <div class="form-group">
            <h4 for="exampleInputEmail1">Phone : <?php echo e($info->phone); ?></h4>
        </div>
        <div class="form-group">
            <h4 for="exampleInputEmail1">Comment : <?php echo e($info->comment); ?></h4>
        </div>
        <div class="form-group">
           <textarea name="reply" class="form-control" style="width: 30%" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Reply</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\Desktop\PROJECT_SEM1\lastProject\resources\views/admin/FormContact/edit.blade.php ENDPATH**/ ?>