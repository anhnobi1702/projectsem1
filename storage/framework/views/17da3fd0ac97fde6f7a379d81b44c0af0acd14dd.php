
<?php $__env->startSection('banner'); ?>
    <section class="sub-banner">
        <h2 class="sr-only">Banner</h2>
        <img src="<?php echo e(url('customer')); ?>/imgbanner/shopbanner.jfif" alt="banner" class="banner2" />
    </section>
    <!-- /Banner -->
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>blog</li>
                </ul>
                <h1 class="page-tit">blog</h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="content-part blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12  pull-right">
                    <aside id="blog_sidebar">
                        <div class="blog_widget search-widget">
                            <div class="widget-content">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" placeholder="Search here..." value="">
                                        <input type="submit" id="searchsubmit" value="">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog_sidebar_widget popular-product-widget hidden-sm hidden-xs">
                            <div class="widget-title">
                                <h2 class="blog-header text-left">Recent Post</h2>
                            </div>
                            <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="box">
                                    <div class="img-part">
                                        <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->banner); ?>" alt="blog post"
                                            class="img-fluid" />
                                    </div>
                                    <div class="txt-part">
                                        <a class="blog-tit"
                                            style="overflow: hidden;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;"
                                            href="<?php echo e(route('blogdetail', $item->id)); ?>"><?php echo e($item->title); ?></a><br>
                                        <a href="<?php echo e(route('blogdetail', $item->id)); ?>" class="blog-date"><i
                                                class="icon-clock"></i><?php echo e($item->updated_at); ?></a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog_sidebar_widget popular-product-widget hidden-sm hidden-xs">
                            <div class="widget-title">
                                <h2 class="blog-header text-left">cetegory</h2>
                            </div>
                            <div class="post-cetegory">
                                <ul>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $countPro = $pro->countProduct($item->id); ?>
                                        <li>
                                            <div class="post-cetegory-header"><a class="" href="#"><?php echo e($item->name); ?>

                                                    (<?php echo e(8); ?>)</a></div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog_sidebar_widget popular-product-widget hidden-sm hidden-xs">
                            <div class="widget-title">
                                <h2 class="blog-header text-left">Tags</h2>
                            </div>
                            <div class="post-tag">
                                <ul>
                                    <li><a href="#">Animal</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">organic</a></li>
                                    <li><a href="#">organic foods</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">summer</a></li>
                                    <li><a href="#">trend</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        
                    </aside>
                </div>
                <!-- Content left -->
                <div class="col-md-9 col-sm-12 col-xs-12 blog-detail">
                    <div class="blog-img">
                        <img style="width: 100%" src="<?php echo e(url('uploads')); ?>/<?php echo e($blog->banner); ?>"
                            alt="Green Tea for Change Your Eating Food" class="" />
                    </div>
                    <div class="blog-txt">
                        <ul>
                            <li><a href="#"><i class="icon-clock"></i><?php echo e($blog->title); ?></a></li>
                            <li><a href="#"><i class="icon-interface"></i><?php echo e($count + $countRep); ?> Comments</a></li>
                        </ul>
                        <h2 class="text-left"><?php echo e($blog->title); ?></h2>
                        <p><?php echo e($blog->content); ?>

                        </p>
                        <section class="middle-section">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 pull-right">
                                    <div class="youtube-video">
                                        <iframe width="437" height="360" src="https://www.youtube.com/embed/IDG3_J0TTXU"
                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 pull-left">
                                    <div class="tit">
                                        <h3>What We Can Talk About</h3>
                                    </div>
                                    <ul class="talk-about-list">
                                        <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($item->title); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        
                        <section class="comment-section">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="tit">
                                        <h3><?php echo e($count + $countRep); ?> Comments</h3>
                                    </div>
                                    <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="comment-box">
                                            <div class="icon-part">
                                                <?php if($item->getName->avatar != null): ?>
                                                    <img style="width: 100px;height: 100px;"
                                                        src="<?php echo e(url('uploads')); ?>/<?php echo e($item->getName->avatar); ?>"
                                                        alt="user" class="img-responsive" />
                                                <?php else: ?>
                                                    <img style="width: 100px;height: 100px;"
                                                        src="<?php echo e(url('customer')); ?>/images/user-icon.png" alt="user"
                                                        class="img-responsive" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="comment-part">
                                                <div class="top-part">
                                                    <div class="l-part">
                                                        <div class="date"><?php echo e($item->updated_at); ?></div>
                                                        <div class="user-name"><?php echo e($item->getName->name); ?></div>
                                                    </div>
                                                    <div class="r-part">
                                                        <?php if(Auth::check()): ?>
                                                            <a class="btn replay-btn"
                                                                onclick="showrep(<?php echo e($item->id); ?>)">reply</a>
                                                        <?php else: ?>
                                                            <a class="btn replay-btn"
                                                                href="<?php echo e(route('login','page=blogdetail='.$blog->id)); ?>">reply</a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <p><?php echo e($item->comment); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if($item->RepComment()->get() != null): ?>
                                            <?php $__currentLoopData = $item->RepComment()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="comment-box pleft ">
                                                    <div class="icon-part">
                                                        
                                                        <?php if($items->getRepName->avatar != null): ?>
                                                            <img style="width: 100px;height: 100px;"
                                                                src="<?php echo e(url('uploads')); ?>/<?php echo e($items->getRepName->avatar); ?>"
                                                                alt="user" class="img-responsive" />
                                                        <?php else: ?>
                                                            <img style="width: 100px;height: 100px;"
                                                                src="<?php echo e(url('customer')); ?>/images/user-icon.png"
                                                                alt="user" class="img-responsive" />
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="comment-part">
                                                        <div class="top-part">
                                                            <div class="l-part">
                                                                <div class="date"><?php echo e($items->updated_at); ?></div>
                                                                <div class="user-name"><?php echo e($items->getRepName->name); ?>

                                                                </div>
                                                            </div>
                                                            <div class="r-part">
                                                                <?php if(Auth::check()): ?>
                                                                    <a class="btn replay-btn"
                                                                        onclick="showrep(<?php echo e($item->id); ?>)">reply</a>
                                                                <?php else: ?>
                                                                    <a class="btn replay-btn"
                                                                        href="<?php echo e(route('login','page=blogdetail='.$blog->id)); ?>">reply</a>
                                                                <?php endif; ?>
                                                            </div>
                                                            <p><?php echo e($items->reply); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        <?php if(Auth::check()): ?>
                                            <div class="comment-box pleft" id="show<?php echo e($item->id); ?>"
                                                style="display: none">
                                                <div class="icon-part">
                                                    <?php if($item->getName->avatar != null): ?>
                                                    <img style="width: 100px;height: 100px;"
                                                        src="<?php echo e(url('uploads')); ?>/<?php echo e(Auth::user()->avatar); ?>"
                                                        alt="user" class="img-responsive" />
                                                    <?php else: ?>
                                                    <img style="width: 100px;height: 100px;"
                                                        src="<?php echo e(url('customer')); ?>/images/user-icon.png" alt="user"
                                                        class="img-responsive" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="comment-part">
                                                    <div class="top-part">
                                                        <form style="border: none" action="<?php echo e(route('rep')); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="comment_id"
                                                                value="<?php echo e($item->id); ?>" id="">
                                                            <input type="hidden" name="blog_id" value="<?php echo e($blog->id); ?>"
                                                                id="">
                                                            <input type="hidden" name="user_id"
                                                                value="<?php echo e(Auth::user()->id); ?>" id="">
                                                            <textarea name="reply" class="form-control"
                                                                placeholder="Your Comment"></textarea>
                                                            <button type="submit" style="float: right"
                                                                class="btn btn-success">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </section>
                        <section class="form-section">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="tit">
                                        <h3>Leave a Comment</h3>
                                        <p class="slogan">Your email address will not be published.</p>
                                    </div>
                                    <form action="<?php echo e(route('commentblog')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        
                                        <div class="form-group col-sm-12 col-xs-12">
                                            <textarea name="comment" class="form-control"
                                                placeholder="Your Comment"></textarea>
                                            <?php if(Auth::check()): ?>
                                                <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                                                <input type="hidden" name="blog_id" value="<?php echo e($blog->id); ?>">
                                                <button class="submit">Submit Comment</button>
                                            <?php else: ?>
                                                <a class="btn btn-success" href="<?php echo e(route('login','page=blogdetail='.$blog->id)); ?>">Login to
                                                    comment</a>
                                            <?php endif; ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Content left -->

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
    <script>
        function showrep(id) {
            document.getElementById("show" + id).style.display = "block";
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PROJECT_SEM1\PROJECT_SEM1\lastProject\resources\views/customer/page/blogdetail.blade.php ENDPATH**/ ?>