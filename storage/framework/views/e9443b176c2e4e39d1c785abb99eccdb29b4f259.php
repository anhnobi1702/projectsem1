
<?php $__env->startSection('main'); ?>
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1>Add Product</h1>
            <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="<?php echo e(old('name')); ?>" style="width: 70%" class="form-control"
                        id="">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" min="1" value="<?php echo e(old('price')); ?>" name="price" style="width: 70%"
                        class="form-control" id="">
                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="">Sale Price
                    </label>
                    <input type="number" min="0" value="0" value="<?php echo e(old('sale_price')); ?>" name="sale_price"
                        style="width: 70%" class="form-control" id="">
                    <?php $__errorArgs = ['sale_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text text-danger"><?php echo e($message); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group d-flex">
                        <div style="width: 32%" class="mr-3">
                            <label for="apply" class="lablez"><input type="file" name="file" class="inputz" id="apply">Get
                                Image</label>
                        </div>
                        <div class="form-group file-input">
                            <label for="message-image" class="col-form-label">Description Image</label>
                            <input class="form-control d-none" name="files[]" id="message-image" type="file" multiple>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">material</label>
                        <br>
                        <?php $__currentLoopData = $material; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input type="checkbox" class="m-2" name="material[]" value="<?php echo e($value->id); ?>" id=""><?php echo e($value->name); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Size</label>
                        <br>
                        <?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input type="checkbox" class="m-2" name="size[]" value="<?php echo e($value->id); ?>" id=""><?php echo e($value->name); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Brand</label>
                        <select name="brand_id" class="form-control" style="width: 70%" id="">
                            <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e(old('category_id') == $value->id ? 'selected' : ''); ?> value="<?php echo e($value->id); ?>">
                                    <?php echo e($value->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['brand_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category_id" class="form-control" style="width: 70%" id="">
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php echo e(old('category_id') == $value->id ? 'selected' : ''); ?> value="<?php echo e($value->id); ?>">
                                    <?php echo e($value->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text text-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <br>
                        <input type="radio" <?php echo e(old('status') == 1 ? 'checked' : ''); ?> name="status" class="mr-2" value="0"
                            checked>Still
                        <br>
                        <input type="radio" <?php echo e(old('status') == 0 ? 'checked' : ''); ?> name="status" class="mr-2"
                            value="1">Sold Out
                    </div>
                    <div class="form-group">
                        <label for="">Description
                        </label>
                        <input type="text" min="0" value="<?php echo e(old('description')); ?>" name="description" style="width: 70%"
                            class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\lastProject\resources\views/admin/product/add.blade.php ENDPATH**/ ?>