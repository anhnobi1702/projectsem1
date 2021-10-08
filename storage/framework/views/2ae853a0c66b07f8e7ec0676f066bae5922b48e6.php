
<?php $__env->startSection('main'); ?>

    <div class="row">
        <?php if(session('alert')): ?>
            <section class='alert alert-success'><?php echo e(session('alert')); ?></section>
        <?php endif; ?>  
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sale Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col"><?php echo e($product->name); ?></th>
                    <td><img class="" style="width:100px;height:100px" src="<?php echo e(url('uploads')); ?>/<?php echo e($product->image); ?>"
                            alt="">
                    </td>
                    <th scope="col">$ <?php echo e($product->price); ?></th>
                    <th scope="col">$ <?php echo e($product->sale_price); ?></th>
                    <th scope="col"><?php echo e($product->status == 0 ? 'still' : 'Sold Out'); ?></th>
                    <td><a class="btn-sm btn-primary" href="<?php echo e(route('product.edit', $product->id)); ?>">Update</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <p ><h2 style="width: 100%;color: black">Description :</h2></p>

        <p style="width: 30%;color: black"><?php echo e($product->description); ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\Desktop\lastProject\resources\views/admin/product/detail.blade.php ENDPATH**/ ?>