
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
                    <li>Checkout</li>
                </ul>
                <h1 class="page-tit">Checkout</h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="content-part checkout-page">
        <div class="container">
            <div class="checkout-step-two text-left">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2 class="checkout-head">01 / Billing & Shipping details</h2>
                        <div class="row">
                            <div class="checkout-two-form text-left">
                                <form action="<?php echo e(route('post_order')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="name" value="<?php echo e($user->name); ?>" name="name"
                                            class="form-control" placeholder="Name" />
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p style="float: left;color: red"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="email" value="<?php echo e($user->email); ?>" name="email"
                                            class="form-control" placeholder="Email" />
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p style="float: left;color: red"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="phone"
                                            value="<?php echo e($user->phone == null ? '' : $user->phone); ?>" name="phone"
                                            class="form-control" placeholder="Phone" />
                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p style="float: left;color: red"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <input type="hidden" id="total" name="total" value="<?php echo e($last_total); ?>">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="selectdiv">
                                            <select name="order_method" id="order_method" class="form-control">
                                                <option selected value="0">Cash On Delivery (COD)</option>
                                                <option value="1">Online Banking</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="selectdiv">
                                            <select name="shipping_method" id="shipping_method" disabled
                                                class="form-control">
                                                <?php $__currentLoopData = $shipping_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($shipping_method_id == $item->id ? 'selected' : ''); ?>

                                                        value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="selectdiv">
                                            <select name="matp" disabled class="form-control">
                                                <option selected="selected">City</option>
                                                <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($matp == $item->matp ? 'selected' : ''); ?>

                                                        value="<?php echo e($item->matp); ?>"><?php echo e($item->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="selectdiv">
                                            <select name="maqh" disabled class="form-control">
                                                <option selected="selected">Districts</option>
                                                <?php $__currentLoopData = $qh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($maqh == $item->maqh ? 'selected' : ''); ?>

                                                        value="<?php echo e($item->maqh); ?>"><?php echo e($item->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="selectdiv">
                                            <select name="xaid" disabled class="form-control">
                                                <option selected="selected">Communes</option>
                                                <?php $__currentLoopData = $xa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($xaid == $item->xaid ? 'selected' : ''); ?>

                                                        value="<?php echo e($item->xaid); ?>"><?php echo e($item->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea rows="5" id="note" placeholder="Order notes" class="form-control"
                                            name="note"> </textarea>
                                        <label>
                                    </div>
                                    <div id="order" class="col-md-12 col-sm-12 col-xs-12">
                                        <button onclick="po()"
                                            style="width: 266.11px;height: 52px;background: #549843;border: #549843;color: white;float: left;"
                                            type="submit">PLACE ORDER</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="total_last" value="<?php echo e($last_total); ?>">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2 class="checkout-head">Your Order</h2>
                        <div class="checkout-order-table text-left">
                            <table class="table-responsive">
                                <thead>
                                    <tr class="th-head">
                                        <th scope="col" width="68%">PRODCUT</th>
                                        <th scope="col" width="42%">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->name); ?> x <?php echo e($item->quantity); ?></td>
                                            <td>$<?php echo e($item->sale_price > 0 ? $item->total2 : $item->total1); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-shopping">
                                        <td>SUB TOTAL</td>
                                        <td>$<?php echo e($total); ?></td>
                                    </tr>
                                    <tr class="cart-shopping">
                                        <td>SHIPPING</td>
                                        <td>+$<?php echo e($delivery); ?></td>
                                    </tr>
                                    <tr class="cart-shopping">
                                        <td>Coupon</td>
                                        <td>-<?php echo e($price_coupon); ?></td>
                                    </tr>
                                    <tr class="cart-shopping">
                                        <td>Coupon Shipping</td>
                                        <td>-$<?php echo e($price_ship); ?></td>
                                    </tr>
                                    <tr class="cart-total">
                                        <td>TOTAL</td>
                                        <td>$<?php echo e($last_total); ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="checkout-step-three text-left" id="payment" style="display: none">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2 class="checkout-head">02 / Payment information</h2>
                        <div class="center row">
                            <div class="card-list"><span>Credit card (PayPal)</span> <img
                                    src="<?php echo e(url('customer')); ?>/images/card-list.png" alt="credit card"
                                    class="img-responsive" /></div>
                            <p class="checkout-desc">Pay with your credit card via PayPal Website payments Pro.</p>
                            <br>
                            <div id="online_banking" style="width: 50%" class="checkout-three-form text-left">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        paypal.Button.render({
            // Configure environment
            env: 'sandbox',
            client: {
                sandbox: 'Ad-Oka6n25RunPf2732_F-lyWRxNi_0333TpR9EJBO0FGc94X-Jaz0Nrc2nc6srbG1nm-kNjtgLA9pTh',
                production: 'demo_production_client_id'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'responsive',
                color: 'silver',
                shape: 'rect',
                label: 'paypal',
                tagline: 'false',
                fundingicons: true,
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {
                total = $("#total_last").val();
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: total,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
                total = $("#total_last").val();
                phone = $("#phone").val();
                email = $("#email").val();
                name = $("#name").val();
                note = $("#note").val();
                order_method = $("#order_method").val();
                $.ajax({
                    type: "GET",
                    url: "<?php echo e(route('banking')); ?>",
                    data: {
                        total: total,
                        phone: phone,
                        email: email,
                        name: name,
                        note: note,
                        order_method: order_method
                    },
                    success: function(data) {
                        toastr.success('Thank you for your purchase!');
                        return actions.payment.execute().then(function() {

                        });
                    },
                    error: function(res) {
                        console.log(res);
                        toastr.error('Please enter enough information');
                    }
                })

            }
        }, '#online_banking');

        function po() {
            phone = $("#phone").val();
            email = $("#email").val();
            name = $("#name").val();
            if (phone == '' || email =='' || name =='') {
                
            } else {
                toastr.success('Thank you for your purchase!');
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/customer/page/checkout.blade.php ENDPATH**/ ?>