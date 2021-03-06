
<?php $__env->startSection('banner'); ?>
    <div class="clearfix"></div>
    <section class="sub-banner">
        <h2 class="sr-only">Banner</h2>
        <img class="banner2" src="<?php echo e(url('customer')); ?>/imgbanner/shopbanner.jfif" alt="Banner" />
    </section>
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>Shoping Cart</li>
                </ul>
                <h1 class="page-tit">Shoping Cart</h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="content-part cart-page">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th class="product">PRODUCT</th>
                            <th class="name">Name & Description</th>
                            <th class="price">Size</th>
                            <th class="price">Price</th>
                            <th class="quantity">Quantity</th>
                            <th class="total">Total</th>
                            <th class="cancle">&nbsp;</th>
                        </tr>
                    </thead>
                    <form action="<?php echo e(route('updateCart')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <tbody id="ca">
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $size = $c->getSize($item->proId); ?>
                                <tr id="cart<?php echo e($item->proId); ?><?php echo e($item->sizeid); ?>">
                                    <input type="hidden" name="count" value="<?php echo e($key + 1); ?>">
                                    <input type="hidden" name="product_id[]" value="<?php echo e($item->proId); ?>" id="">
                                    

                                    <td class="cart-image-wrapper">
                                        <a href="#"><img class="cart-image" style="width: 100px;height: 100px;"
                                                src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>" alt=""></a>
                                    </td>
                                    <td class="product-tit"><a href="#"><?php echo e($item->name); ?></a></td>
                                    
                                    <td class="size"><span class="size">
                                            <select style="width: 100px" name="size_id[]" id="">
                                                <?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($item->sizeid == $items->size_id ? 'selected' : ''); ?>

                                                        value="<?php echo e($items->size_id); ?>"><?php echo e($items->getName->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                    </td>
                                    <td class="price"><span
                                            class="money">$<?php echo e($item->sale_price > 0 ? $item->sale_price : $item->price); ?></span>
                                    </td>
                                    <td>
                                        <div class="qty">
                                            <input type="number" name="quantity[]"
                                                style="border: none;width: 100px;background: none"
                                                value="<?php echo e($item->quantity); ?>">
                                            
                                        </div>
                                    </td>
                                    <td class="total">
                                        $<?php echo e($item->sale_price > 0 ? $item->sale_price * $item->quantity : $item->price * $item->quantity); ?>

                                    </td>
                                    <td class="cancle"><a style="cursor: pointer;"
                                            onclick="removeCart(<?php echo e($item->proId); ?>,<?php echo e($item->sizeid); ?>)"><i
                                                class="icon-cancel-music"></i></a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="l-part">
                                        <a class="continue-shopping-btn" href="<?php echo e(route('store')); ?>">Continue with
                                            Shopping<i class="icon-right-arrow-1"></i></a>
                                    </div>
                                    <div class="r-part">
                                        <a class="cancle-cart-btn" style="cursor: pointer" onclick="removeAllCart()"><i
                                                class="icon-cancel-music"></i>cancle cart</a>
                                        <button class="update-cart-btn"><i class="icon-refresh"></i>update cart</button>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </form>
                </table>
            </div>
            <div class="caupon">
                <label>Coupon Code</label>
                <input class="caupon_text" id="coupon" type="text" name="coupon" />
                <button class="caupon-btn" id="cp">Apply Now</button>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-6 col-sm-12 pull-right"
                    style="display: <?php echo e($count_Cart == 0 ? 'none' : 'block'); ?>">
                    <div class="total-box">
                        <div class="tit">Shopping Cart Total</div>
                        <div class="total-box-inner">
                            <div class="sub-total"><span>Total </span><span class="price"><?php echo e($total); ?>$</span></div>
                            <input type="hidden" name="total" value="<?php echo e($total); ?>" id="total_cart">
                            <div class="sub-total"><span>Coupon </span><span class="price" id="cou">-0$</span></div>
                            <div class="sub-total"><span>Ship </span><span class="price" id="shippp">+0$</span></div>
                            <div class="grand-total"><span>Grand Total </span><span class="price"
                                    id="lasttotal">$<?php echo e($total); ?></span></div>
                            <a class="checkout-btn" href="<?php echo e(route('checkout')); ?>"><i class="icon-check-mark"></i>Proceed
                                to checkout</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-sm-12 pull-left">
                    <div class="tax-box">
                        <div class="tit">Estimate Shipping and Tax</div>
                        <div class="tax-box-inner">
                            <?php if(session('alert')): ?>
                                <section class='alert alert-danger'><?php echo e(session('alert')); ?></section>
                            <?php endif; ?>????
                            <p>Enter your destination to get a shipping estimate.</p>
                            <label>City</label>
                            <select onchange="city()" id="tp">
                                <option>---------SELECT CITY ADDRESS---------</option>
                                <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->matp); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <label>Districts</label>
                            <select onchange="district()" id="qh">
                                <option>---------SELECT DISCTRICTS ADDRESS---------</option>
                            </select><label>Communes</label>
                            <select id="xa">
                                <option>---------SELECT DISCTRICTS ADDRESS---------</option>
                            </select><label>Shipping Method</label>
                            <select id="shipping_method">
                                <?php $__currentLoopData = $shipping_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <label>Coupon Shipping Code</label>
                            <input class="postal-text" type="text" id="shipp" />
                            <button onclick="subAddress()" class="quote"><i class="icon-file"></i>Get a Quote</button>
                        </div>
                    </div>
                </div>
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
                                    <p>Customer Support</p>
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
                                    <p><a href="tel:+8888888888">+<?php echo e($phone); ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\M??y t??nh\lastProject\lastProject\resources\views/customer/page/cart.blade.php ENDPATH**/ ?>