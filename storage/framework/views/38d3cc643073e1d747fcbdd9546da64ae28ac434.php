
<?php $__env->startSection('banner'); ?>
    <section class="sub-banner">
        <h2 class="sr-only">Banner</h2>
        <img class="banner" src="<?php echo e(url('customer')); ?>/imgbanner/shopbanner.jfif" alt="Banner" />
    </section>
    <!-- /Banner -->
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>My Account</li>
                </ul>
                <h1 class="page-tit">My Account</h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="content-part account-page">
        <div class="container">
            <div class="myaccount-form text-left">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <form class="account-form-login" method="POST" action="<?php echo e(route('login_post')); ?>">
                            <?php echo csrf_field(); ?>
                            <h2 class="text-left text-capitalize">Login</h2>
                            <input type="text" name="email" class="form-control" placeholder="Your name" />
                            <?php if(session()->get('check_post') == 'login'): ?>
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
                            <?php endif; ?>
                            <input type="password" name="password" class="form-control" placeholder="password" />
                            <?php if(session()->get('check_post') == 'login'): ?>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="float: left;color: red"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <?php endif; ?>
                            <?php if(session()->get('check_post') == 'login'): ?>
                                <?php if(session('alert')): ?>
                                    <section class='alert alert-danger'><?php echo e(session('alert')); ?></section>
                                <?php endif; ?>  
                            <?php endif; ?>
                            <a href="<?php echo e(route('forgot_password')); ?>" style="text-decoration: underline">Forgot Password?</a>
                            <input type="hidden" name="page" value="<?php echo e($page); ?>" class="form-control"
                                placeholder="password" />

                            <input type="submit" value="LOGIN" />
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php if(session()->get('check_post') == 'register'): ?>
                            <?php if(session('alert')): ?>
                                <section class='alert alert-success'><?php echo e(session('alert')); ?></section>
                            <?php endif; ?>  
                        <?php endif; ?>
                        <form action="<?php echo e(route('register_post')); ?>" class="account-form-reg" method="POST">
                            <?php echo csrf_field(); ?>
                            <h2 class="text-left text-capitalize">Register</h2>
                            <input type="text" name="name" class="form-control" placeholder="Your name" />
                            <?php if(session()->get('check_post') == 'register'): ?>
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
                            <?php endif; ?>
                            <span class="asterisk_input"> </span>
                            <input type="text" name="email" class="form-control required" placeholder="Your email" />
                            <?php if(session()->get('check_post') == 'register'): ?>
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
                            <?php endif; ?>
                            <span class="asterisk_input"> </span>
                            <input type="password" name="password" class="form-control required" placeholder="Password" />
                            <?php if(session()->get('check_post') == 'register'): ?>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="float: left;color: red"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <?php endif; ?>
                            <span class="asterisk_input"> </span>
                            <input type="password" name="cf_password" class="form-control required"
                                placeholder="Repeat Password" />
                            <?php if(session()->get('check_post') == 'register'): ?>
                                <?php $__errorArgs = ['cf_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="float: left;color: red"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <?php endif; ?>
                            <span class="asterisk_input"> </span>
                            <input type="submit" value="SUBMIT" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content -->
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
                                    <p><a href="tel:+8888888888">+(888) 888-8888</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\lastProject\resources\views/customer/account/login.blade.php ENDPATH**/ ?>