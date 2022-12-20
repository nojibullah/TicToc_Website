<header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-primary-dott full-width sticky">
        <div class="top-nav">
            <!-- mobile version logo -->
            <div class="logo hide-l hide-xl hide-xxl">
                <a href="index.html" class="logo">
                    <!-- Logo White Version -->
                    <img class="logo-white" src=<?php echo e(asset('img/watch_logo1.png')); ?> alt="">
                    <!-- Logo Dark Version -->
                    <img class="logo-dark" src=<?php echo e(asset('img/watch_logo1.png')); ?> alt="">
                </a>
            </div>
            <p class="nav-text"></p>
            <div id = "head">
                <!-- left menu items -->
                <div class="top-nav left-menu">
                    <ul class="right top-ul chevron">
                        <li>
                            <a href="<?php echo e(url('/')); ?>">Home</a>
                        </li>

                        <li>
                            <a href="<?php echo e(url('/our_service')); ?>">Our service</a>
                        </li>
                        <li><a href="<?php echo e(url('/about_us')); ?>">About</a></li>

                    </ul>
                </div>

                <!-- logo -->
                <ul class="logo-menu" style="">
                    <a href="<?php echo e(url('/')); ?>" class="logo">
                        <!-- Logo White Version -->
                        <img class="logo-white" src=<?php echo e(asset('img/watch_logo_1.png')); ?> alt="">
                        <!-- Logo Dark Version -->
                        <img class="logo-dark" src=<?php echo e(asset('img/watch_logo_1.png')); ?> alt="" style="margin-left: 60px;">
                    </a>
                </ul>

                <!-- right menu items -->
                <div class="top-nav right-menu">
                    <ul class="top-ul chevron">

                        <li>
                            <a href="<?php echo e(url('/products')); ?>">Products</a>
                        </li>

                        <?php if(Route::has('login')): ?>
                            <div class="top-right links">
                                <?php if(auth()->guard()->check()): ?>
                                    
                                <?php else: ?>
                                    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>

                                    <?php if(Route::has('register')): ?>
                                        <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header><?php /**PATH D:\www\htdocs\ticktock\resources\views/Layout/header.blade.php ENDPATH**/ ?>