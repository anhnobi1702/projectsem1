
<?php $__env->startSection('banner'); ?>
    <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
        <div class="slides" data-group="slides">
            <ul>
                <?php if($count_banner == 0): ?>
                    <li>
                        <div class="slide-body" data-group="slide">
                            <img src="<?php echo e(url('customer')); ?>/imgbanner/slider-banner.png" alt="banner">
                            <div class="carouseal-caption">
                                <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500"
                                    data-length="300">
                                    <div class="sub-tit">Vegetable is good</div>
                                    <h2><span>100%</span> Organic</h2>
                                    <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800"
                                        data-length="300">Are they safer? More nutritious? </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-body" data-group="slide">
                            <img src="<?php echo e(url('customer')); ?>/imgbanner/slider-banner.png" alt="banner">
                            <div class="carouseal-caption">
                                <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500"
                                    data-length="300">
                                    <div class="sub-tit">Vegetable is good</div>
                                    <h2><span>100%</span> Organic</h2>
                                    <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800"
                                        data-length="300">Are they safer? More nutritious? </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>
                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($count_banner == 1): ?>
                        <li>
                            <div class="slide-body" data-group="slide">
                                <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->banner); ?>" alt="banner">
                                <div class="carouseal-caption">
                                    <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500"
                                        data-length="300">
                                        <div class="sub-tit"><?php echo e($item->title); ?></div>
                                        <h2><span>100%</span> Organic</h2>
                                        <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800"
                                            data-length="300">Are they safer? More nutritious? </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>
                    <li>
                        <div class="slide-body" data-group="slide">
                            <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->banner); ?>" alt="banner">
                            <div class="carouseal-caption">
                                <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500"
                                    data-length="300">
                                    <div class="sub-tit"><?php echo e($item->title); ?></div>
                                    <h2><span>100%</span> Organic</h2>
                                    <div class="caption sub" data-animate="slideAppearLeftToRight" data-delay="800"
                                        data-length="300">Are they safer? More nutritious? </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <section class="fress-entry-section">
        <div class="pos-absolute">
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $top3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-4 col-xs-12">
                            <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>" alt="fresh fruit"
                                class="img-responsive" />
                            <div class="tit-btn-wrapper">
                                <h2 class="tit"><?php echo e($pro->getCateName($item->category_id)->name); ?></h2>
                                <a class="btn">View Collections</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <div class="clearfix"></div>
    <section class="new-arrivals-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="section-tit">
                        <div class="inner">
                            <h2><span>New</span> arrivals</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <div class="owl-carousel owl-theme new-arrivals-slider">
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="wrapper">
                                    <div class="pro-img"> <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>"
                                            alt="new arrival" class="img-responsive" /> </div>
                                    <div class="contain-wrapper">
                                        <div class="tit"><?php echo e($item->name); ?></div>
                                        <?php if($item->sale_price > 0): ?>
                                            <div class="price">
                                                <div class="new-price">$<?php echo e($item->sale_price); ?></div>
                                                <div class="old-price"><del>$<?php echo e($item->price); ?></del></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="price">
                                                <div class="new-price">$<?php echo e($item->price); ?></div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(Auth::check()): ?>
                                            <div class="btn-part"> <a onclick="addtoCart(<?php echo e($item->id); ?>)"
                                                    style="cursor: pointer" class="cart-btn">buy now</a> <i
                                                    class="icon-basket-supermarket"></i> </div>
                                        <?php else: ?>
                                            <div class="btn-part"> <a href="<?php echo e(route('login', 'page=index')); ?>"
                                                    style="cursor: pointer" class="cart-btn">buy now</a> <i
                                                    class="icon-basket-supermarket"></i> </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(Auth::check()): ?>
                                        <?php $exits = $wish->checkexits($item->id, Auth::user()->id); ?>
                                    <?php else: ?>
                                        <?php $exits = 0; ?>
                                    <?php endif; ?>
                                    <div class="wrapper-box-hover">
                                        <div class="text">
                                            <ul>
                                                <?php if(Auth::check()): ?>
                                                    <li><a onclick="addtowish(<?php echo e($item->id); ?>)"><i
                                                                id="heart<?php echo e($item->id); ?>" class="icon-heart"
                                                                style="color: <?php echo e($exits == 1 ? 'red' : 'white'); ?>"></i></a>
                                                    </li>
                                                <?php else: ?>
                                                    <li><a href="<?php echo e(route('login', 'page=index')); ?>"><i
                                                                id="heart<?php echo e($item->id); ?>" class="icon-heart"
                                                                style="color: <?php echo e($exits == 1 ? 'red' : 'white'); ?>"></i></a>
                                                    </li>
                                                <?php endif; ?>
                                                <li><a href="<?php echo e(route('productdetail', $item->id)); ?>"><i
                                                            class="icon-view"></i></a></li>
                                                <?php if(Auth::check()): ?>
                                                    <?php if($item->status == 0): ?>
                                                        <li><a onclick="addtoCart(<?php echo e($item->id); ?>)"
                                                                style="cursor: pointer"><i
                                                                    class="icon-basket-supermarket"></i></a></li>
                                                    <?php else: ?>
                                                        <li><a onclick="soldout()"
                                                                style="cursor: pointer"><i
                                                                    class="icon-basket-supermarket"></i></a></li>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <li><a href="<?php echo e(route('login', 'page=index')); ?>"
                                                            style="cursor: pointer"><i
                                                                class="icon-basket-supermarket"></i></a></li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php if($item->status == 0): ?>
                                        <?php if($item->sale_price > 0): ?>
                                            <div class="sale">sale</div>
                                        <?php endif; ?>
                                        <?php if($item->id == $new->id): ?>
                                            <div class="new">new</div>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <div class="sale">Sold</div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="deal-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="section-tit">
                        <div class="inner">
                            <h2><span>deal of</span> the day</h2>
                        </div>
                    </div>
                    <div class="filter-part">
                        <div class="col-lg-4 col-md-6 col-sm-6  col-xs-12 pull-left">
                            <?php $__currentLoopData = $top3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $star = $pro->getStar($item->id); ?>
                                <div class="filterDiv vegatable ">
                                    <div class="img-part"> <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>"
                                            alt="Jessica Simpson Fruit" class="img-responsive" /> </div>
                                    <div class="text-part">
                                        <div class="box-tit"><?php echo e($item->name); ?></div>
                                        <div class="ratting">
                                            <ul>
                                                <li><a href="#"><img
                                                            src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 0 ? 'green-star-2.png' : 'dark-star-2.png'); ?>"
                                                            alt="star" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                            src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 1 ? 'green-star-2.png' : 'dark-star-2.png'); ?>"
                                                            alt="star" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                            src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 2 ? 'green-star-2.png' : 'dark-star-2.png'); ?>"
                                                            alt="star" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                            src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 3 ? 'green-star-2.png' : 'dark-star-2.png'); ?>"
                                                            alt="star" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                            src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 4 ? 'green-star-2.png' : 'dark-star-2.png'); ?>"
                                                            alt="star" class="img-responsive"></a></li>
                                            </ul>
                                        </div>
                                        <?php if($item->sale_price > 0): ?>
                                            <div class="price">
                                                <div class="new-price">$<?php echo e($item->sale_price); ?></div>
                                                <div class="old-price"><del>$<?php echo e($item->price); ?></del></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="price">
                                                <div class="new-price">$<?php echo e($item->price); ?></div>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <?php if(Auth::check()): ?>
                                            <div class="btn-part"> <a onclick="addtoCart(<?php echo e($item->id); ?>)"
                                                    style="cursor: pointer" class="cart-btn">buy now</a> </div>
                                        <?php else: ?>
                                            <div class="btn-part"> <a href="<?php echo e(route('login', 'page=index')); ?>"
                                                    style="cursor: pointer" class="cart-btn">buy now</a> </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-8 col-xs-12 center-part hidden-xs hidden-sm hidden-md">
                            <div class="slider-bg">
                                <img style="max-width: 100%;" src="<?php echo e(url('customer')); ?>/images/slider-bg-1.png"
                                    alt="slider-back" class="img-responsive bg" />
                                <div class="pos-abs">
                                    <div class="owl-carousel owl-theme deal-slider">
                                        <?php $__currentLoopData = $top3new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item">
                                                <div class="pro-img"> <img
                                                        src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>"
                                                        alt="Kensie Fruit" class="img-responsive" /> </div>
                                                <div class="contain-wrapper">
                                                    <div class="tit"><?php echo e($item->name); ?></div>
                                                    <?php if($item->sale_price > 0): ?>
                                                        <div class="price">
                                                            <div class="new-price">$<?php echo e($item->price); ?></div>
                                                            <div class="old-price"><del>$<?php echo e($item->sale_price); ?></del>
                                                            </div>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="price">
                                                            <div class="new-price">$<?php echo e($item->price); ?></div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if(Auth::check()): ?>
                                                        <div class="btn-part"> <a onclick="addtoCart(<?php echo e($item->id); ?>)"
                                                                style="cursor: pointer" class="cart-btn">buy now</a>
                                                            <i class="icon-basket-supermarket"></i>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="btn-part"> <a
                                                                href="<?php echo e(route('login', 'page=index')); ?>"
                                                                style="cursor: pointer" class="cart-btn">buy now</a>
                                                            <i class="icon-basket-supermarket"></i>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 pull-right">
                            <?php $__currentLoopData = $last3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $star = $pro->getStar($item->id); ?>
                                <div class="filterDiv vegatable ">
                                    <div class="img-part"> <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>"
                                            alt="Jessica Simpson Fruit" class="img-responsive" /> </div>
                                    <div class="text-part">
                                        <div class="box-tit"><?php echo e($item->name); ?></div>
                                        <div class="ratting">
                                            <ul>
                                                <li><a href="#"><img
                                                            src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 0 ? 'green-star-2.png' : 'dark-star-2.png'); ?>"
                                                            alt="star" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                            src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 1 ? 'green-star-2.png' : 'dark-star-2.png'); ?>"
                                                            alt="star" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                            src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 2 ? 'green-star-2.png' : 'dark-star-2.png'); ?>"
                                                            alt="star" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                            src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 3 ? 'green-star-2.png' : 'dark-star-2.png'); ?>"
                                                            alt="star" class="img-responsive"></a></li>
                                                <li><a href="#"><img
                                                            src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 4 ? 'green-star-2.png' : 'dark-star-2.png'); ?>"
                                                            alt="star" class="img-responsive"></a></li>
                                            </ul>
                                        </div>
                                        <?php if($item->sale_price > 0): ?>
                                            <div class="price">
                                                <div class="new-price">$<?php echo e($item->sale_price); ?></div>
                                                <div class="old-price"><del>$<?php echo e($item->price); ?></del></div>
                                            </div>
                                        <?php else: ?>
                                            <div class="price">
                                                <div class="new-price">$<?php echo e($item->price); ?></div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(Auth::check()): ?>
                                            <div class="btn-part"> <a onclick="addtoCart(<?php echo e($item->id); ?>)"
                                                    style="cursor: pointer" class="cart-btn">buy now</a></div>
                                        <?php else: ?>
                                            <div class="btn-part"> <a href="<?php echo e(route('login', 'page=index')); ?>"
                                                    style="cursor: pointer" class="cart-btn">buy now</a></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="fress-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 lpart">
                    <div class="bg equal-height ">
                        <h2 class="section-name"><span>fresh</span> Fruits</h2>
                        <a href="<?php echo e(route('store')); ?>" class="shop-btn">shop now</a>
                    </div>
                </div>
                <div class="col-sm-4  rpart">
                    <div class="bg equal-height">
                        <h3 class="free-shipping">freee shipping</h3>
                        <p>With order over $500</p>
                        <a href="<?php echo e(route('store')); ?>" class="shop-btn-1">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="organic-news">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="section-tit">
                        <div class="inner">
                            <h2><span>Organic</span> news</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutter">
                <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-3 col-xs-12">
                        <div class="wrapper">
                            <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->banner); ?>" alt="organic-news" class="" />
                            <div class="overlay"> </div>
                            <div class="text">
                                <div class="date"><?php echo e($item->updated_at); ?></div>
                                <div class="title"><a
                                        href="<?php echo e(route('blogdetail', $item->id)); ?>"><?php echo e($item->title); ?></a></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="delivery-process">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 ">
                    <div class="section-tit">
                        <div class="inner">
                            <h2><span>delivery</span> process</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 first">
                    <div class="icon-part"> <img src="<?php echo e(url('customer')); ?>/images/step-1.png" alt="step-1"
                            class="img-responsive center-block" /> <i class="icon-carrot"></i> </div>
                    <div class="process-name">
                        <div class="step">step 01</div>
                        <p>Choose one or more products</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 second">
                    <div class="icon-part"> <img src="<?php echo e(url('customer')); ?>/images/step-2.png" alt="step-2"
                            class="img-responsive center-block" /> <i class="icon-warehouse"></i> </div>
                    <div class="process-name">
                        <div class="step">step 02</div>
                        <p>Determine our Farm</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 third">
                    <div class="icon-part"> <img src="<?php echo e(url('customer')); ?>/images/step-3.png" alt="step-3"
                            class="img-responsive center-block" /> <i class="icon-placeholder-filled-point"></i> </div>
                    <div class="process-name">
                        <div class="step">step 03</div>
                        <p>Write Your Location</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 fourth">
                    <div class="icon-part"> <img src="<?php echo e(url('customer')); ?>/images/step-4.png" alt="step-4"
                            class="img-responsive center-block" /> <i class="icon-package"></i> </div>
                    <div class="process-name">
                        <div class="step">step 04</div>
                        <p>Fast Delivery</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="news-letter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="center">
                        <h3 class="news-tit"><span>Sign up</span> newsletter</h3>
                        <p class="instruction">Sign up our newsletter to recieve <span>latest news</span> and
                            <span>greate offers</span>:
                        </p>
                        <div class="form">
                            <form action="#">
                                <input class="newsletter-input" type="text" placeholder="Enter your email here">
                                <button class="newsletter-btn">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="brand">
        <div class="container">
            <h3 class="sr-only">Brand logos</h3>
            <div class="owl-carousel owl-theme brand-slider">
                <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item"> <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->logo); ?>" alt="brand 01"
                            class="img-responsive" /> </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
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

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/customer/page/index.blade.php ENDPATH**/ ?>