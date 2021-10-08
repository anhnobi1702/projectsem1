
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
                    <li>Order Tracking</li>
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
                            <th scope="col">Time</th>
                            <th scope="col">Shipping Method</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Shipping Status</th>
                            <th scope="col">Total</th>
                            <th scope="col">View</th>
                        </tr>
                    </thead>
                    <thead>
                        <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $method = $shipping_method->getName($item->shipping_method_id) ?>
                            <tr >
                                <th scope="col"><?php echo e($key+1); ?></th>
                                <th scope="col"><?php echo e($item->updated_at); ?></th>
                                <th scope="col"><?php echo e($method); ?></th>
                                <th scope="col"><?php echo e($item->order_status==0?"Unpaid":"Paid"); ?></th>
                                <?php if($item->shipping_status == 0): ?>
                                    <th scope="col">No Process</th>
                                <?php elseif($item->shipping_status == 1): ?>
                                    <th scope="col">Processed</th>
                                <?php elseif($item->shipping_status == 2): ?>
                                    <th scope="col">Delivering</th>
                                <?php elseif($item->shipping_status == 3): ?>
                                    <th scope="col">Delivered</th>
                                <?php elseif($item->shipping_status == 4): ?>
                                    <th scope="col">Cancelled</th>
                                <?php endif; ?>
                                <th scope="col">$ <?php echo e($item->total); ?></th>
                                <th scope="col">
                                    <a href="<?php echo e(route('order_tracking_detail',$item->id)); ?>">View</a>
                                </th>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/customer/page/ordered.blade.php ENDPATH**/ ?>