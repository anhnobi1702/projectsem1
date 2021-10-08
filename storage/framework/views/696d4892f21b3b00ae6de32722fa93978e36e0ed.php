
<?php $__env->startSection('main'); ?>

    <div class="row">
        <div class="col-sm-4" style="margin-bottom:15px">
            <form class="form-search" action="<?php echo e(URL::to('admin/product/search')); ?>" method="POST">
                <div class="form-group">
                    <input type="text" class="input-ajax" name="keyword_submit" placeholder="Search..">
                    <input type="submit" name="Search" class="search-submit btn btn-primary btn-sm" value="Search">
                </div>
                <?php echo csrf_field(); ?>
            </form>
        </div>
        <?php if(session('alert')): ?>
            <section class='alert alert-success'><?php echo e(session('alert')); ?></section>
        <?php endif; ?>  
        <table class="table">
            <thead>
                <tr style="background: blueviolet;color: white">
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sale Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                    <th scope="col">View Detail</th>
                    <th scope="col">Remove</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="col"><?php echo e($item + 1); ?></th>
                        <th scope="col"><?php echo e($value-> name); ?></th>
                        <td><img class="" style="width:100px;height:100px"
                                src="<?php echo e(url('uploads')); ?>/<?php echo e($value->image); ?>" alt="">
                        </td>
                        <td>$ <?php echo e($value->price); ?></td>
                        <td>$ <?php echo e($value->sale_price); ?></td>
                        <td class="<?php echo e($value->status == 1 ? 'text-danger' : 'text-success'); ?>">
                            <?php echo e($value->status == 1 ? 'Deactivated' : 'Active'); ?>

                        </td>
                        <td><a class="btn-sm btn-primary" href="<?php echo e(route('product.edit', $value->id)); ?>">Update</a>
                        </td>
                        <td><a class="btn-sm btn-primary" href="<?php echo e(route('product.show', $value->id)); ?>">View Detail</a>
                        </td>
                        <form action="<?php echo e(route('product.destroy', $value->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <td><button class="btn-sm btn-danger">Remove</button>
                            </td>
                        </form>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

            <div class="col-sm-12 col-xs-12">
                <nav aria-label="Page navigation example">
                    <?php if($product->lastPage() > 1): ?>
                        <ul class="pagination">
                            <?php if($product->onFirstPage()): ?>
                                <li class="hidden-md"></li>
                            <?php else: ?>
                                <li class="page-item indicator left"><a class="page-link"
                                        href="<?php echo e($product->previousPageUrl()); ?>" rel="prev"><i class="fa fa-chevron-left"></i></a>
                                </li>
                            <?php endif; ?>
                            <?php for($i = 1; $i <= $product->lastPage(); $i++): ?>
                                <li class="page-item ">
                                    <a class="page-link  <?php echo e($i == $product->currentPage() ? 'active' : ''); ?>"
                                        href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a>
                                </li>
                            <?php endfor; ?>
                            <?php if($product->hasMorePages()): ?>
                                <li class="page-item indicator right"><a class="page-link"
                                        href="<?php echo e($product->nextPageUrl()); ?>" rel="next"><i class="fa fa-chevron-right"></i></a>
                                </li>
                            <?php else: ?>
                                <li class="d-none"></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </nav>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\lastProject\resources\views/admin/product/index.blade.php ENDPATH**/ ?>