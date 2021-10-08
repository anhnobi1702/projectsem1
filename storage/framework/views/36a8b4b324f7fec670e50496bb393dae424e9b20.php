<p class="item-in-cart" id="itemInCart"><?php echo e($quant); ?> items in your cart</p>
<input type="number" style="display: none" value="<?php echo e($quant); ?>" id="quantity">
<div class="item-list">
    <?php
    $total = 0;
    $total_price = 0;
    $total_sale = 0;
    ?>
    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="box" id="cartsub<?php echo e($item->proId); ?><?php echo e($item->sizeid); ?>">
            <div class="img-part"> <img style="width: 90px;height: 80px;"
                    src="<?php echo e(url('uploads')); ?>/<?php echo e($item->image); ?>" alt="product" class="img-responsive"> </div>
            <div class="text-part">
                <a class="product-name" style="width: 100%"><?php echo e($item->name); ?></a>
                <div class="quantity-and-price"><?php echo e($item->quantity); ?> x
                    $<?php echo e($item->sale_price > 0 ? $item->sale_price : $item->price); ?></div>
            </div>
            <a style="cursor: pointer" onclick="removeSubCart(<?php echo e($item->proId); ?>,<?php echo e($item->sizeid); ?>)" class="clear-btn"><i class="icon-cancel-music"></i></a>
        </div>
        <?php if ($item->sale_price > 0) {
        $total_sale += $item->sale_price * $item->quantity;
        } else {
        $total_price += $item->price * $item->quantity;
        } ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $total = $total_sale + $total_price; ?>
</div>
<div class="cart-total"> <span id="total">Total: $<?php echo e($total); ?></span> </div>
<div class="cart-btm">
    <div class="btn-group"> <a href="<?php echo e(route('cart')); ?>" class="btn cart-view">view
            cart</a>
             
</div>
</div>
<?php /**PATH D:\XAMPP\htdocs\lastProject\resources\views/customer/page/subcart.blade.php ENDPATH**/ ?>