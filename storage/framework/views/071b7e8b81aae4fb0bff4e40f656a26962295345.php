
<?php $__env->startSection('main'); ?>
    <div class="row">
        
        <select onchange="order_filter()" id="order_filter" class="form-control col-sm-2 mb-3" id="">
            <option <?php echo e(session()->get('order') == 'new'?"selected":""); ?> value="new">New | All</option>
            <option <?php echo e(session()->get('order') == 'paid'?"selected":""); ?> value="paid">Paid</option>
            <option <?php echo e(session()->get('order') == 'unpaid'?"selected":""); ?> value="unpaid">Unpaid</option>
            <option <?php echo e(session()->get('order') == 'noprocess'?"selected":""); ?> value="noprocess">No Process</option>
            <option <?php echo e(session()->get('order') == 'processed'?"selected":""); ?> value="processed">Processed</option>
            <option <?php echo e(session()->get('order') == 'delivering'?"selected":""); ?> value="delivering">Delivering</option>
            <option <?php echo e(session()->get('order') == 'delivered'?"selected":""); ?> value="delivered">Delivered</option>
            <option <?php echo e(session()->get('order') == 'cancelled'?"selected":""); ?> value="cancelled">Cancelled</option>
        </select>
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Shipping Method</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Shipping Status</th>
                    <th scope="col">Update</th>
                    <th scope="col">View Detail</th>
                </tr>
            </thead>
            <tbody id="fil">
                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form action="<?php echo e(route('order.update', $item->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <?php $name_method = $method->getName($item->shipping_method_id); ?>
                        <tr>
                            <th scope="col"><?php echo e($key + 1); ?></th>
                            <th scope="col"><?php echo e($item->name); ?></th>
                            <th scope="col"><?php echo e($item->phone); ?></th>
                            <th scope="col"><?php echo e($item->email); ?></th>
                            <th scope="col"><?php echo e($item->address); ?></th>
                            <th scope="col"><?php echo e($item->quantity); ?></th>
                            <th scope="col"><?php echo e($name_method); ?></th>
                            <th scope="col"><?php echo e($item->payment_methods == 0 ? 'Cash On Delivery' : 'Online Banking'); ?></th>
                            <th scope="col">
                                <select name="order_status" id="">
                                    <option <?php echo e($item->order_status == 0 ? 'selected' : ' '); ?> value="0">Unpaid</option>
                                    <option <?php echo e($item->order_status == 1 ? 'selected' : ' '); ?> value="1">Paid</option>
                                </select>
                            </th>
                            <th scope="col">
                                <select name="shipping_status" id="">
                                    <option <?php echo e($item->shipping_status == 0 ? 'selected' : ' '); ?> value="0">No Process
                                    </option>
                                    <option <?php echo e($item->shipping_status == 1 ? 'selected' : ' '); ?> value="1">Processed
                                    </option>
                                    <option <?php echo e($item->shipping_status == 2 ? 'selected' : ' '); ?> value="2">Delivering
                                    </option>
                                    <option <?php echo e($item->shipping_status == 3 ? 'selected' : ' '); ?> value="3">Delivered
                                    </option>
                                    <option <?php echo e($item->shipping_status == 4 ? 'selected' : ' '); ?> value="4">Cancelled
                                    </option>
                                </select>
                            </th>
                            <th scope="col">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </th>
                            <th scope="col">
                                <a href="<?php echo e(route('order.show', $item->id)); ?>" class="btn btn-success">View</a>
                            </th>
                        </tr>
                    </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <script>
        function order_filter() {
            filter = $("#order_filter").val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('order_filter')); ?>",
                data: {
                    filter: filter
                },
                success: function(data) {
                    url = window.location.origin + "/admin/order=" + filter;
                    window.history.pushState("Details", "Title", url);
                    $("#fil").html(data);
                },
                error: function(res) {
                    console.log(res);
                }
            })
        }

        function update_order(id) {
            order_status = $("#order_status").val();
            shipping_status = $("#shipping_status").val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('update_order')); ?>",
                data: {
                    order_status: order_status,
                    shipping_status: shipping_status,
                    id: id
                },
                success: function(data) {
                    location.reload();
                    console.log(data);
                },
                error: function(res) {
                    console.log(res);
                }
            })
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PROJECT_SEM1\PROJECT_SEM1\lastProject\resources\views/admin/order/index.blade.php ENDPATH**/ ?>