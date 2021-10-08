
<?php $__env->startSection('banner'); ?>
    <div class="clearfix"></div>
    <section class="sub-banner">
        <h2 class="sr-only">Banner</h2>
        <img src="<?php echo e(url('customer')); ?>/imgabout/banner.jfif" alt="banner" class="banner2" />
    </section>
    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li>Profile</li>
                </ul>
                <h1 class="page-tit">Profile</h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="profile-nav col-md-3">
                <div class="panel">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="<?php echo e(url('uploads')); ?>/<?php echo e($user->avatar); ?>" alt="">
                        </a>
                        <h1><?php echo e($user->name); ?></h1>
                        <p><?php echo e($user->email); ?></p>
                    </div>

                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a style="cursor: pointer;"> <i class="fa fa-edit"></i> Edit
                                profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9">
                <div class="panel">
                    <div class="panel-body bio-graph-info">
                        <h1>Edit Profile</h1>
                        <div class="row">
                            <form action="<?php echo e(route('updateProfile')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <label style="float: left" for="">Name</label>
                                <input type="text" name="name" value="<?php echo e($user->name); ?>" class="form-control"
                                    placeholder="Name">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p  style="float: left;color: red"><?php echo e($message); ?></p>
                                    <div class="clearfix"></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <label style="float: left" for="">Email</label>
                                <input type="text" disabled name="email" value="<?php echo e($user->email); ?>" class="form-control"
                                    placeholder="Email">

                                <label style="float: left" for="">Password</label>
                                <input type="password" name="password" value="<?php echo e(session()->get('password')); ?>"
                                    class="form-control">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p  style="float: left;color: red"><?php echo e($message); ?></p>
                                    <div class="clearfix"></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <label style="float: left" for="">Phone</label>
                                <input type="text" name="phone" value="<?php echo e($user->phone); ?>" class="form-control"
                                    placeholder="Phone">
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p  style="float: left;color: red"><?php echo e($message); ?></p>
                                    <div class="clearfix"></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <label style="float: left" for="">Address</label>
                                <input type="text" name="address" value="<?php echo e($user->address); ?>" class="form-control"
                                    placeholder="Address">
                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p  style="float: left;color: red"><?php echo e($message); ?></p>
                                    <div class="clearfix"></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <label style="float: left" for="">Birthday</label>
                                <input type="date" name="birthday" value="<?php echo e($user->birthday); ?>" class="form-control">
                                
                                <label for="" style="float: left;">Avatar</label>
                                <div style="clear:both" class="clear"></div>
                                <label for="apply" class="lablez"><input type="file" name="file" class="inputz"
                                        id="apply">Get
                                    Image</label>
                                <?php if(Auth::check()): ?>
                                    <Button style="width: 100%;margin-top: 15px;height: 40px;" class="btn btn-success"
                                        <?php echo e(Auth::user()->id == $user->id ? '' : 'disabled'); ?> type="submit">Update
                                        Profile</Button>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vanda\OneDrive\Máy tính\lastProject\lastProject\resources\views/customer/page/viewprofile.blade.php ENDPATH**/ ?>