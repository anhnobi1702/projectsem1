
<?php $__env->startSection('banner'); ?>
    <div class="clearfix"></div>
    <section class="sub-banner">
        <h2 class="sr-only">Banner</h2>
        <img src="<?php echo e(url('customer')); ?>/imgabout/banner.jfif" alt="banner" class="banner2" />
    </section>
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>Order Detail</li>
                </ul>
                <h1 class="page-tit">Order Tracking</h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container bootstrap snippets bootdey">
        <div class="row" style="margin-bottom: 30px">
            <div class="profile-info col-md-12">
                <table class="table">
                    <thead>
                        <tr style="background: blueviolet;color: white">
                            <th scope="col">Stt</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <thead>
                      <?php $__currentLoopData = $order_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr >
                        <th scope="col"><?php echo e($key+1); ?></th>
                        <th scope="col"><?php echo e($item->name); ?></th>
                        <th scope="col"><img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>" style="width: 120px;height: 120px;" alt=""></th>
                        <th scope="col">$ <?php echo e($item->price); ?></th>
                        <th scope="col"><?php echo e($item->quantity); ?></th>
                    </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/customer/page/orderDetail.blade.php ENDPATH**/ ?>