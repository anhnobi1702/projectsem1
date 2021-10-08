
<?php $__env->startSection('banner'); ?>
    <div class="clearfix"></div>
    <section class="sub-banner">
        <h2 class="sr-only">Banner</h2>
        <img class="banner2" src="<?php echo e(url('customer')); ?>/imgabout/banner.jfif" alt="banner" />
    </section>
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>Whishlist</li>
                </ul>
                <h1 class="page-tit">Whishlist</h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="content-part  whishlist-page">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th class="product">PRODUCT</th>
                            <th class="name">Name & Description</th>
                            <th class="price">Price</th>
                            <th class="quantity">product status</th>
                            <th class="total">add to cart</th>
                            <th class="cancle">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody id="showwish">
                        <?php $__currentLoopData = $wish; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr id="item<?php echo e($item->product_id); ?>">
                                <td class="cart-image-wrapper">
                                    <a href="#"><img class="cart-image" style="width: 100px;height: 100px;"
                                            src="<?php echo e(url('uploads')); ?>/<?php echo e($item->getProductName->image); ?>" alt=""></a>
                                </td>
                                <td class="product-tit"><a href="#"><?php echo e($item->getProductName->name); ?></a></td>
                                <td class="price"><span class="money">$
                                        <?php echo e($item->getProductName->sale_price > 0 ? $item->getProductName->sale_price : $item->getProductName->price); ?></span>
                                </td>
                                <td>
                                    <?php echo e($item->getProductName->status == 1 ? 'Out Stock' : 'In Stock'); ?>

                                </td>
                                <?php if($item->getProductName->status == 0): ?>
                                    <td class="total"><a onclick="addtoCart(<?php echo e($item->product_id); ?>)"
                                            style="cursor: pointer">Add to cart</a></td>
                                <?php else: ?>
                                    <td class="total"><a onclick="soldout()" style="cursor: pointer">Add to cart</a></td>
                                <?php endif; ?>
                                <td class="cancle"><a onclick="removewish(<?php echo e($item->product_id); ?>)"
                                        style="cursor: pointer"><i class="icon-cancel-music"></i></a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Services provide -->
    <section class="helpline">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="bgreen">
                        <div class="inline">
                            <div class="box">
                                <div class="icon"> <i class="icon-delivery-truck"></i> </div>
                                <div class="text-part">
                                    <h3>Free Shipping</h3>
                                    <p>Worldwide</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"> <i class="icon-headphones"></i> </div>
                                <div class="text-part">
                                    <h3>24X7</h3>
                                    <p>Customerr Support</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"> <i class="icon-shuffle"></i> </div>
                                <div class="text-part">
                                    <h3>Returns</h3>
                                    <p>and Exchange</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon"> <i class="icon-phone-call"></i> </div>
                                <div class="text-part">
                                    <h3>Hotline</h3>
                                    <p><a href="tel:+8888888888">+(888) 888-8888</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function removewish(id) {
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('removewish', '+id+')); ?>",
                data: {
                    id: id
                },
                success: function(data) {
                    document.getElementById("item" + id).style.display = "none";
                    toastr.success('Change Wishlist Success');
                },
                error: function(res) {
                    toastr.error('Something was wrong');
                }
            })
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('getCountWishList')); ?>",
                data: {

                },
                success: function(data) {
                    $("#countWish").html(data);
                },
                error: function(res) {
                    console.log(res);
                }
            })
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PROJECT_SEM1\PROJECT_SEM1\lastProject\resources\views/customer/page/wishlist.blade.php ENDPATH**/ ?>