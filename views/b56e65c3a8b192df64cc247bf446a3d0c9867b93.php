<style>
    .left-menu, .right-menu {
        padding-top: 50px;
        width: calc(50% - 165px);
        padding-left: 190px;
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
                            <a href="<?php echo e(url('/admin')); ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/view_message')); ?>">Message</a>
                        </li>


                    </ul>
                </div>

                <!-- logo -->
                <ul class="logo-menu" style="">
                    <a href="<?php echo e(url('/')); ?>" class="logo">
                        <!-- Logo White Version -->
                        <img class="logo-white" src=<?php echo e(asset('img/watch_logo.png')); ?> alt="">
                        <!-- Logo Dark Version -->
                        <img class="logo-dark" src=<?php echo e(asset('img/watch_logo.png')); ?> alt="" style="margin-left: 60px;">
                    </a>
                </ul>

                <!-- right menu items -->
                <div class="top-nav right-menu">
                    <ul class="top-ul chevron">
                        <li><a href="<?php echo e(url('/view_recommend')); ?>">Recommend</a></li>
                        <li>
                            <a href="<?php echo e(url('/products')); ?>">Products</a>
                        </li>




                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header><?php /**PATH D:\www\htdocs\ticktock123\resources\views/Layout/admin_header.blade.php ENDPATH**/ ?>