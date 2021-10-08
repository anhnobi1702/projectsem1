
<?php $__env->startSection('banner'); ?>
    <div class="clearfix"></div>
    <section class="sub-banner">
        <h2 class="sr-only">Banner</h2>
        <img class="banner2" src="<?php echo e(url('customer')); ?>/imgbanner/bé3.png" alt="Banner" />
    </section>
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>Vegetables</li>
                </ul>
                <h1 class="page-tit">Vegetables</h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="content-part listing-page">
        <div class="container">
            <div class="row">
                <!-- Content left -->
                <aside class="col-md-4 col-sm-12 col-xs-12">
                    <div id="sidebar">
                        <div class="widget categories-widget">
                            <div class="widget-tit">
                                <h2>Categories</h2>
                                <div class="button" data-toggle="collapse" data-target="#categories">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <div class="widget-contian" id="categories">
                                <ul class="level-1 open">
                                    <li>
                                        <a onclick="cate(0,'All Product')" style="cursor: pointer">All Product</a><span
                                            class="icon-add"></span>
                                    </li>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a onclick="cate(<?php echo e($item->id); ?>,'<?php echo e($item->name); ?>')"
                                                style="cursor: pointer"><?php echo e($item->name); ?></a><span
                                                class="icon-add"></span>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="widget price-range-widget">
                            <div class="widget-tit">
                                <h2>By price</h2>
                                <div class="button" data-toggle="collapse" data-target="#price">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <div class="widget-contian" id="price">
                                <input id="price-range" type="text" name="filter" class="span2" value="" data-slider-min="1"
                                    data-slider-max="100" data-slider-step="5" data-slider-value="[1,100]" />
                                <span>€ 1</span> <span>€ 100</span>
                                <a id="fillter" onclick="filter()" class="filter-btn" style="cursor: pointer">filter</a>
                            </div>
                        </div>
                        <div class="widget top-seller-widget" data-toggle="collapse" data-target="#top-seller">
                            <div class="widget-tit">
                                <h2>top seller</h2>
                                <div class="button">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <div class="widget-contian" id="top-seller">
                                <?php $__currentLoopData = $top3sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $star = $pro->getStar($item->id); ?>
                                    <div class="seller-box">
                                        <div class="seller-img">
                                            <img style="width: 95px;height: 70px;"
                                                src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>" alt="top seller"
                                                class="img-responsive" />
                                        </div>
                                        <div class="seller-text">
                                            <a class="seller-name" href="#"><?php echo e($item->name); ?></a>
                                            <div class="ratting">
                                                <ul>
                                                    <li><a href="#"><img
                                                                src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 0 ? 'green-star.png' : 'dark-star.png'); ?>"
                                                                alt="star" class="img-responsive"></a></li>
                                                    <li><a href="#"><img
                                                                src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 1 ? 'green-star.png' : 'dark-star.png'); ?>"
                                                                alt="star" class="img-responsive"></a></li>
                                                    <li><a href="#"><img
                                                                src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 2 ? 'green-star.png' : 'dark-star.png'); ?>"
                                                                alt="star" class="img-responsive"></a></li>
                                                    <li><a href="#"><img
                                                                src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 3 ? 'green-star.png' : 'dark-star.png'); ?>"
                                                                alt="star" class="img-responsive"></a></li>
                                                    <li><a href="#"><img
                                                                src="<?php echo e(url('customer')); ?>/images/<?php echo e($star > 4 ? 'green-star.png' : 'dark-star.png'); ?>"
                                                                alt="star" class="img-responsive"></a></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                $<?php echo e($item->sale_price > 0 ? $item->sale_price : $item->price); ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        
                        
                    </div>
                </aside>
                <!-- /Content left -->
                <!-- Content Right-->
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="filter">
                                <div class="r-part">
                                    <div class="shorting-box-1">
                                        <form action="<?php echo e(route('store')); ?>" method="get">
                                            <label class="shorting-label">Sort By:</label>
                                            <select name="sort" onchange="sortby()" id="exampleSelect1">
                                                <option value="new">New</option>
                                                <option value="asc">A To Z</option>
                                                <option value="desc">Z To A</option>
                                                <option value="down">High To Low</option>
                                                <option value="up">Low To High</option>
                                            </select>
                                        </form>
                                    </div>
                                    
                                    <div class="grid-short">
                                        <div class="grid-layout"><a class="active" href="#" id="grid"><i
                                                    class="icon-grid-layout"></i></a></div>
                                        <div class="list-grid"><a href="#" id="list-btn"><i class="icon-list-grid"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-part">
                                    <?php if($keyword != ''): ?>
                                        <div>Showing <span>Result</span> of <span style="font-weight: bold"
                                                id="keyname"><?php echo e($keyword); ?></span></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div id="products" class="product-list list-group">
                            <?php $__currentLoopData = $productByCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Auth::check()): ?>
                                    <?php $exits = $wish->checkexits($item->id, Auth::user()->id); ?>
                                <?php else: ?>
                                    <?php $exits = 0; ?>
                                <?php endif; ?>
                                <div class="col-sm-4 col-xs-12 item">
                                    <div class="wrapper">
                                        <div class="pro-img">
                                            <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>" alt="product"
                                                class="img-responsive" />
                                        </div>
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
                                                <?php if($item->status == 0): ?>
                                                    <div class="btn-part"> <a style="cursor: pointer"
                                                            onclick="addtoCart(<?php echo e($item->id); ?>)" class="cart-btn">buy
                                                            now</a>
                                                        <i class="icon-basket-supermarket"></i>
                                                    </div>
                                                <?php else: ?>
                                                    <div class="btn-part"> <a style="cursor: pointer" onclick="soldout()"
                                                            class="cart-btn">buy
                                                            now</a>
                                                        <i class="icon-basket-supermarket"></i>
                                                    </div>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <div class="btn-part"> <a style="cursor: pointer"
                                                        href="<?php echo e(route('login', 'page=store')); ?>" class="cart-btn">buy
                                                        now</a>
                                                    <i class="icon-basket-supermarket"></i>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="wrapper-box-hover">
                                            <div class="text">
                                                <ul>
                                                    <?php if(Auth::check()): ?>
                                                        <li><a onclick="addtowish(<?php echo e($item->id); ?>)"><i
                                                                    id="heart<?php echo e($item->id); ?>"
                                                                    style="color: <?php echo e($exits == 1 ? 'red' : 'white'); ?>"
                                                                    class="icon-heart"></i></a></li>
                                                    <?php else: ?>
                                                        <li><a href="<?php echo e(route('login', 'page=store')); ?>"><i
                                                                    id="heart<?php echo e($item->id); ?>"
                                                                    style="color: <?php echo e($exits == 1 ? 'red' : 'white'); ?>"
                                                                    class="icon-heart"></i></a></li>
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
                                                        <li><a href="<?php echo e(route('login', 'page=store')); ?>"
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
                            
                            <div class="col-sm-12 col-xs-12">
                                <nav aria-label="Page navigation example">
                                    <?php if($productByCate->lastPage() > 1): ?>
                                        <ul class="pagination">
                                            <?php if($productByCate->onFirstPage()): ?>
                                                <li class="hidden-md"></li>
                                            <?php else: ?>
                                                <li class="page-item indicator left"><a class="page-link"
                                                        href="<?php echo e($productByCate->previousPageUrl()); ?>" rel="prev"><i
                                                            class="icon-right-arrow"></i></a>
                                                </li>
                                            <?php endif; ?>
                                            <?php for($i = 1; $i <= $productByCate->lastPage(); $i++): ?>
                                                <li class="page-item ">
                                                    <a class="page-link  <?php echo e($i == $productByCate->currentPage() ? 'active' : ''); ?>"
                                                        href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a>
                                                </li>
                                            <?php endfor; ?>
                                            <?php if($productByCate->hasMorePages()): ?>
                                                <li class="page-item indicator right"><a class="page-link"
                                                        href="<?php echo e($productByCate->nextPageUrl()); ?>" rel="next"><i
                                                            class="icon-right-arrow"></i></a>
                                                </li>
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
                <!-- /Content Right-->
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
        function cate(id, value) {
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('getByCate')); ?>",
                data: {
                    id: id
                },
                success: function(data) {
                    // window.history.pushState({}, "store", "store/category=".id);
                    url = window.location.origin + "/store/category=" + id;
                    window.history.pushState("Details", "Title", url);
                    $("#products").html(data);
                    $('#keyname').html(value);
                    toastr.success('Filter By Cate Success');
                },
                error: function(res) {
                    console.log(res);
                    toastr.error('Something was wrong');
                }
            })
        }

        function show(id) {
            document.getElementById('hide' + id).style.display = "block";
        }
    </script>
    <script>
        function filter() {
            value = $('#price-range').val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('getbyPrice')); ?>",
                data: {
                    value: value
                },
                success: function(data) {
                    // window.history.pushState({}, "store", "store/category=".id);
                    url = window.location.origin + "/store/price=" + value;
                    window.history.pushState("Details", "Title", url);
                    $("#products").html(data);
                    $('#keyname').html(value);
                    toastr.success('Filter Success');
                },
                error: function(res) {
                    console.log(res);
                    toastr.error('Something was wrong');

                }
            })
        }

        function sortby() {
            value = $('#exampleSelect1').val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('getbySort')); ?>",
                data: {
                    value: value
                },
                success: function(data) {
                    url = window.location.origin + "/store/sort=" + value;
                    window.history.pushState("Details", "Title", url);
                    $("#products").html(data);
                    $('#keyname').html(value);
                    toastr.success('Sort Success');

                },
                error: function(res) {
                    console.log(res);
                    toastr.error('Something was wrong');

                }
            })
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PROJECT_SEM1\PROJECT_SEM1\lastProject\resources\views/customer/page/store.blade.php ENDPATH**/ ?>