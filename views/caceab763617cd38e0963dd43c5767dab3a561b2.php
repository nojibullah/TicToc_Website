<style>
    @media  screen and (min-width: 992px) {
        .left-menu {
            margin-left: -100px;
        }
    }
    .margin-bottom-30:hover {
        -ms-transform: scale(1.5); /* IE 9 */
        -webkit-transform: scale(1.5); /* Safari 3-8 */
        transform: scale(1.2);
    }
    .dropdown-item:hover{
        color: wheat;
    }

    /*--*/
    @media  screen and (max-width: 495px) {
        .btn-info {
            margin-left: 210px;
        }
        .responsive_menu{
            display:block;
        }
        .users{
            display: none;
        }

    }
    @media  screen and (min-width: 496px) {

        .responsive_menu{
            display:none;
        }

    }
</style>
<header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-primary-dott full-width sticky">
        <div class="top-nav">
            <!-- mobile version logo -->
            <div class="logo hide-l hide-xl hide-xxl">
                <a href="index.html" class="logo">
                    <!-- Logo White Version -->
                    <img class="logo-white" src=<?php echo e(asset('img/watch_logo.png')); ?> alt="">
                    <!-- Logo Dark Version -->
                    <img class="logo-dark" src=<?php echo e(asset('img/watch_logo.png')); ?> alt="">
                </a>
            </div>
            <p class="nav-text"></p>
            <div id = "head">
                <!-- left menu items -->
                <div class="top-nav left-menu" >
                    <ul class="right top-ul chevron">
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo e(url('/our_service')); ?>">Our service</a></li>
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
                <div class="top-nav right-menu" >
                    <li><a href="<?php echo e(url('/about_us')); ?>">About</a></li>
                    <li><a href="<?php echo e(url('/products')); ?>">Products</a></li>
                    <ul class="top-ul chevron">

                    </ul>
                    <li class="responsive_menu" >
                        <div class="btn-group" style="margin-left: -48px;">
                            <button type="button" class="btn btn-info"  style="background-color: transparent;color:wheat;">
                                <i class="fas fa-user-circle" style="font-size: 20px;"></i> Jackson
                            </button>
                        </div>
                    </li>

                    <li class="responsive_menu">
                        <a href="<?php echo e(url('/view_repairing')); ?>" style="text-transform: capitalize;">My Repair</a>
                    </li>
                    <li class="responsive_menu" >
                        <a href="logout.php" style="text-transform: capitalize;">Log out</a>
                    </li>
                    <?php if(Auth::check()): ?>
                        <li>

                                <div class="btn-group users">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="background-color: transparent;color:wheat;">
                                        <i class="fas fa-user-circle" style="font-size: 20px;"></i> <?php echo e(Auth::user()->name); ?>

                                    </button>
                                    <div class="dropdown-menu" style="background-color: transparent;border-radius: 11px;border: 2px solid rgb(193, 161, 140);
                                     padding: 9px; width: 160px; height: 110px; position: absolute;transform: translate3d(0px, 53px, 0px); will-change: transform; top: 2px;left: 0px;">
                                        <a class="dropdown-item" href="<?php echo e(url('/view_repairing')); ?>" style="padding: 5px;text-transform: capitalize;"><i class="fas fa-user-tie"></i> My Repair</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?> " style="padding: 5px;text-transform: capitalize;"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <?php echo e(__('Logout')); ?>

                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>

                                </div>


                        </li>
                    <?php else: ?>
                        <?php if(Route::has('login')): ?>
                            <div class="top-right links" style="margin-top: -15px;">
                                <?php if(auth()->guard()->check()): ?>
                                    
                                <?php else: ?>
                                    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>

                                    <?php if(Route::has('register')): ?>
                                        <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header><?php /**PATH D:\www\htdocs\ticktock123\resources\views/Layout/header1.blade.php ENDPATH**/ ?>