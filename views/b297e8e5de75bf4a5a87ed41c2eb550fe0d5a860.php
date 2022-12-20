<?php $__env->startSection('content'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    

    <link rel="icon" type="image/png" href="<?php echo e(asset('login/images/icons/favicon.ico')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/css/util.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/css/main.css')); ?>">
    <!--===============================================================================================-->
<style>

</style>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?php echo e(asset('login/images/img-01.png')); ?>" alt="IMG">
                </div>

                    <form method="POST" action="<?php echo e(route('login')); ?>" style="width: 60%;margin-top: 40px;">
                        
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required autocomplete="current-password">

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" style="text-align: center;">
                                <button type="submit" class="btn btn-primary" style="width: 200px; margin-right: 80px;">
                                    <?php echo e(__('Login')); ?>

                                </button>


                            </div>
                        </div>
                    </form>

            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('login/js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www_xampp\htdocs\ticktock\resources\views/auth/login.blade.php ENDPATH**/ ?>