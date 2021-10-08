<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(Auth::check()): ?>
        <?php $exits = $wish->checkexits($item->id, Auth::user()->id); ?>
    <?php else: ?>
        <?php $exits = 0; ?>
    <?php endif; ?>
    <div class="col-sm-4 col-xs-12 item">
        <div class="wrapper">
            <div class="pro-img">
                <img src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>" alt="product" class="img-responsive" />
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
                <div class="btn-part"> <a onclick="addtoCart(<?php echo e($item->id); ?>)" style="cursor: pointer"
                        class="cart-btn">buy now</a>
                    <i class="icon-basket-supermarket"></i>
                </div>
            </div>
            <div class="wrapper-box-hover">
                <div class="text">
                    <ul>
                        <?php if(Auth::check()): ?>
                            <li><a onclick="addtowish(<?php echo e($item->id); ?>)"><i id="heart<?php echo e($item->id); ?>"
                                        style="color: <?php echo e($exits == 1 ? 'red' : 'white'); ?>" class="icon-heart"></i></a>
                            </li>
                        <?php else: ?>
                            <li><a href="<?php echo e(route('login', 'page=store')); ?>"><i id="heart<?php echo e($item->id); ?>"
                                        style="color: <?php echo e($exits == 1 ? 'red' : 'white'); ?>"
                                        class="icon-heart"></i></a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo e(route('productdetail', $item->id)); ?>"><i class="icon-view"></i></a></li>
                        <?php if(Auth::check()): ?>
                            <?php if($item->status == 0): ?>
                                <li><a onclick="addtoCart(<?php echo e($item->id); ?>)" style="cursor: pointer"><i
                                            class="icon-basket-supermarket"></i></a></li>
                            <?php else: ?>
                                <li><a onclick="soldout()" style="cursor: pointer"><i
                                            class="icon-basket-supermarket"></i></a></li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li><a href="<?php echo e(route('login', 'page=store')); ?>" style="cursor: pointer"><i
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
        <?php if($data->lastPage() > 1): ?>
            <ul class="pagination">
                <?php if($data->onFirstPage()): ?>
                    <li class="hidden-md"></li>
                <?php else: ?>
                    <li class="page-item indicator left"><a class="page-link" href="<?php echo e($data->previousPageUrl()); ?>"
                            rel="prev"><i class="icon-right-arrow"></i></a>
                    </li>
                <?php endif; ?>
                <?php for($i = 1; $i <= $data->lastPage(); $i++): ?>
                    <li class="page-item ">
                        <a class="page-link  <?php echo e($i == $data->currentPage() ? 'active' : ''); ?>"
                            href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a>
                    </li>
                <?php endfor; ?>
                <?php if($data->hasMorePages()): ?>
                    <li class="page-item indicator right"><a class="page-link" href="<?php echo e($data->nextPageUrl()); ?>"
                            rel="next"><i class="icon-right-arrow"></i></a>
                    </li>
                <?php else: ?>
                    <li class="d-none"></li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
    </nav>
</div>
<?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/customer/master/filterProduct.blade.php ENDPATH**/ ?>