
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
                <!-- Content Right-->
                <div class="col-md-3 col-sm-12 col-xs-12  pull-right">
                    <aside id="blog_sidebar">
                        <div class="blog_widget search-widget">
                            <div class="widget-content">
                                <form disabled role="search" id="searchform" class="searchform">
                                    <?php echo method_field('put'); ?>
                                    <div>
                                        <input type="text" id="value_blog" name="name" placeholder="Search here..."
                                            value="">
                                        <input onclick="searchblog()" id="subm" type="submit" value="">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog_sidebar_widget popular-product-widget hidden-sm hidden-xs">
                            <div class="widget-title">
                                <h2 class="blog-header text-left">Recent Post</h2>
                            </div>
                            <?php $__currentLoopData = $top3blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="box">
                                    <div class="img-part">
                                        <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->banner); ?>" alt="blog post"
                                            class="img-fluid" />
                                    </div>
                                    <div class="txt-part">
                                        <a class="blog-tit"
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
                                        <?php $count_comment = $cate->count_category($item->id); ?>
                                        <li>
                                            <div class="post-cetegory-header"><a class=""
                                                    href="<?php echo e(route('cate', $item->id)); ?>"><?php echo e($item->name); ?>

                                                    (<?php echo e($count_comment); ?>)</a></div>
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
                <!-- /Content Right-->
                <!-- Content Left-->
                <div class="col-md-9 col-sm-12 col-xs-12 blog">
                    <div class="row">
                        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $count_cmt = $bl->countComment($item->id); ?>
                            <?php $count_rep = $bl->countRep($item->id); ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 blog-list-detail">
                                <div class="blog-list">
                                    <figure><img class="img-responsive" src="<?php echo e(url('uploads')); ?>/<?php echo e($item->banner); ?>"
                                            alt="" /></figure>
                                    <div class="blog-info">
                                        <ul>
                                            <li><a href="#"><i class="icon-clock"></i><?php echo e($item->updated_at); ?></a></li>
                                            <li><a href="#"><i class="icon-interface"></i><?php echo e($count_cmt + $count_rep); ?>

                                                    Comments</a>
                                            </li>
                                        </ul>
                                        <h2 class="text-left text-uppercase" style="
                                                                            overflow: hidden;
                                                                            line-height: 25px;
                                                                            -webkit-line-clamp: 1;
                                                                            display: -webkit-box;
                                                                            -webkit-box-orient: vertical;"><a
                                                href="<?php echo e(route('blogdetail', $item->id)); ?>"><?php echo e($item->title); ?></a>
                                        </h2>
                                        <a href="<?php echo e(route('blogdetail', $item->id)); ?>" class="rd-mr text-uppercase">read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="blog-nav">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <div class="pagination text-center">
                                    <nav aria-label="Page navigation example">
                                        <?php if($blog->lastPage() > 1): ?>
                                            <ul class="pagination">
                                                <?php if($blog->onFirstPage()): ?>
                                                    <li class="hidden-md"></li>
                                                <?php else: ?>
                                                    <a class="left" href="<?php echo e($blog->previousPageUrl()); ?>"><i
                                                            class="icon-right-arrow"></i>prev</a>
                                                <?php endif; ?>
                                                <?php for($i = 1; $i <= $blog->lastPage(); $i++): ?>
                                                    <a class="<?php echo e($i == $blog->currentPage() ? 'active' : ''); ?>"
                                                        href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a>
                                                <?php endfor; ?>
                                                <?php if($blog->hasMorePages()): ?>

                                                    <a class="right" href="<?php echo e($blog->nextPageUrl()); ?>">next<i
                                                            class="icon-right-arrow"></i></a>
                                                <?php else: ?>
                                                    <li class="d-none"></li>
                                                <?php endif; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Content Left-->

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
        function searchblog() {
            name = $("#value_blog").val();
            if (name == '') {
                url = window.location.origin + "/blog";
                window.location.href = url;
                window.history.pushState("Details", "Title", url);
            } else {
                url = window.location.origin + "/blog/name=" + name;
                window.location.href = url;
                window.history.pushState("Details", "Title", url);
            }

            $("#subm").attr("disabled", true);
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/customer/page/blog.blade.php ENDPATH**/ ?>