
<?php $__env->startSection('main'); ?>

    <div class="row">
        <div class="col-md-6 offset-3">
            <h1>Update Product</h1>
            <form action="<?php echo e(route('product.update', $old_product->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo method_field('put'); ?>;
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="<?php echo e($old_product->name); ?>" style="width: 70%"
                        class="form-control" id="">
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
                    <input type="text" name="price" value="<?php echo e($old_product->price); ?>" style="width: 70%"
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
                    <label for="">Sale Price</label>
                    <input type="text" name="sale_price" value="<?php echo e($old_product->sale_price); ?>" style="width: 70%"
                        class="form-control" id="">
                    <?php $__errorArgs = ['sale_price'];
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
                    <label for="">Image</label>
                    <br>
                    <img src="<?php echo e(url('uploads')); ?>/<?php echo e($old_product->image); ?>" style="width: 20%" alt="">
                </div>
                <div class="form-group">
                    <div style="width: 32.1%" class="mr-3">
                        <label for="">Image</label>
                        <label for="apply" style="" class="lablezz"><input type="file" name="file" class="inputz"
                                id="apply">Change
                            Image</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Description Image</label>
                    <br>
                    <ul class="ul p-1">
                        <?php $__currentLoopData = $desImg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($key % 4 == 0): ?>
                                <br/>
                            <?php endif; ?>;
                            <li class="li">
                                <input type="checkbox" name="ima[]" value="<?php echo e($value->id); ?>" id="myCheckbox<?php echo e($value->id); ?>" />
                                <label class="label" for="myCheckbox<?php echo e($value->id); ?>">
                                    <img src="<?php echo e(url('uploads')); ?>/<?php echo e($value->image); ?>" />
                                </label>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="form-group d-flex">
                    <div class="form-group file-input">
                        <label for="message-image" class="col-form-label">Description Image</label>
                        <input class="form-control d-none" name="files[]" id="message-image" type="file" multiple>
                    </div>  
                </div>
                <div class="form-group">
                    <label for="">size</label>
                    <br>
                    <?php $__currentLoopData = $size; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="checkbox" <?php echo e((in_array($value->id,$old_size))?"checked":""); ?>  class="m-2" name="size[]" value="<?php echo e($value->id); ?>" id=""><?php echo e($value->name); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="form-group">
                    <label for="">Brand</label>
                    <select name="brand_id" class="form-control" style="width: 70%" id="">
                        <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php echo e($old_product->brand_id == $value->id ? 'selected' : ''); ?>

                                value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
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
                            <option <?php echo e($old_product->category_id == $value->id ? 'selected' : ''); ?>

                                value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
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
                    <input type="radio" name="status" class="mr-2" value="1"
                        <?php echo e($old_product->status == 1 ? 'checked' : ''); ?>>Sold Out
                    <br>
                    <input type="radio" name="status" class="mr-2" value="0"
                        <?php echo e($old_product->status == 0 ? 'checked' : ''); ?>>Still
                </div>
                <div class="form-group">
                    <label for="">Description
                    </label>
                    <input type="text" min="0" value="<?php echo e($old_product->description); ?>" value="<?php echo e(old('description')); ?>" name="description" style="width: 70%"
                        class="form-control" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\Desktop\lastProject\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>