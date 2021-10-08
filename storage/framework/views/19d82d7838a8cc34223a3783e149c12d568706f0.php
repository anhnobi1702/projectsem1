
<?php $__env->startSection('banner'); ?>
    <div class="clearfix"></div>
    <!-- Banner -->
    <section class="sub-banner">
        <h2 class="sr-only">Banner</h2>
        <img class="banner2" src="<?php echo e(url('customer')); ?>/imgabout/banner.jfif" alt="banner" />
    </section>
    <!-- /Banner -->
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>Contact Us</li>
                </ul>
                <h1 class="page-tit">Contact Us</h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="content-part contact-page">
        <section class="address-part">
            <div class="container">
                <div class="row">
                    <div class="logo-part">
                        <img src="<?php echo e(url('customer')); ?>/images/contact-page-logo.png" alt="logo"
                            class="img-responsive center-block" />
                    </div>
                    <div class="inner-part">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="box address-box">
                                <div class="icon-part">
                                    <img src="<?php echo e(url('customer')); ?>/images/location-icon.png" alt="location"
                                        class="img-responsive center-block" />
                                </div>
                                <div class="tit">
                                    <h3>address</h3>
                                    <p><?php echo e($address); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="box phone-box">
                                <div class="icon-part">
                                    <img src="<?php echo e(url('customer')); ?>/images/phone-icon.png" alt="phone"
                                        class="img-responsive center-block" />
                                </div>
                                <div class="tit">
                                    <h3>Phone</h3>
                                    <p><a href="tel:+11233123223"><?php echo e($phone); ?></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="box email-box">
                                <div class="icon-part">
                                    <img src="<?php echo e(url('customer')); ?>/images/message-icon.png" alt="message"
                                        class="img-responsive center-block" />
                                </div>
                                <div class="tit">
                                    <h3>email</h3>
                                    <p><a href="mailto:info@company.com"><?php echo e($email); ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map-form">
            <div class="row no-gutter">
                <div class="col-sm-6 col-xs-12 form-part equal-height">
                    <div class="inner-part">
                        <div class="tit">
                            <h3><span>get in touch</span> with us</h3>

                        </div>
                        <form action="<?php echo e(route('post_contact')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group col-sm-12 col-xs-12">
                                <input name="name" type="text" class="form-control" placeholder="Name" />
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="float: left;color: white"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <input name="email" type="text" class="form-control" placeholder="Email" />
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="float: left;color: white"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <input name="phone" type="text" class="form-control" placeholder="Phone" />
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="float: left;color: white"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <textarea name="comment" class="form-control" placeholder="Comments"></textarea>
                                <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p style="float: left;color: white"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <button class="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 map-section equal-height googlemap">
                    
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.980384379753!2d105.81945410540331!3d21.022778763207253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sin!4v1625661835445!5m2!1svi!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
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

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\Desktop\lastProject\resources\views/customer/page/contact.blade.php ENDPATH**/ ?>