<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

    <?php if(Auth::check()): ?>
        <?php echo $__env->make('Layout.head1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php else: ?>
        <?php echo $__env->make('Layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <?php endif; ?>
</head>

<body class="size-1280 primary-color-light-blue">
<!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
<div id="page-overlay" class="background-dark"></div>

<!-- HEADER -->
<?php echo $__env->make('Layout.header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- MAIN -->
<main role="main">
    <!-- Main Carousel -->
    <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark">
        <div class="item">
            <div class="s-12 center">
                <!-- For ZOOM effect add classes "background-image-zoom-out" or "background-image-zoom-in" -->
                <div class="section text-center background-image-zoom-out">
                    <!-- ZOOMED Carousel Image -->
                    <div class="background-image background-image-object" style="background-image:url(<?php echo e(asset('img/business8.jpg')); ?>)"></div>

                    <div class="line">
                        <hr class="animated-carousel-element break background-primary break-small break-center margin-top-130">
                        <p class="text-extra-thin animated-carousel-element text-size-40 text-white" >
                            <b>Welcome to Tick tock!</b><br>
                            We sell quality branded watch and clocks at a cheap price<br>
                            we provide quality Watch and Clock repair services.</p>

                        <hr class="animated-carousel-element break background-primary break-small break-center">

                    </div>
                    <!-- Pie Charts -->
                    <div class="line hide-s">
                        <div style="width: 113%;margin: auto;">
                            <div class="s-12 m-12 l-8 xl-6 margin-top-60 center">
                                <div class="margin2x">
                                    <div class="s-12 m-3">
                      <span class="chart" data-percent="89">
    		                <span class="percent">89</span>
    	                </span>
                                        <h3 class="margin-top-bottom text-white">Completed<br> Product</h3>
                                    </div>
                                    <div class="s-12 m-3">
                      <span class="chart" data-percent="98">
    		                <span class="percent">98</span>
    	                </span>
                                        <h3 class="margin-top-bottom text-white">Satisfied<br> Customer</h3>
                                    </div>
                                    <div class="s-12 m-3">
                      <span class="chart" data-percent="95">
    		                <span class="percent">95</span>
    	                </span>
                                        <h3 class="margin-top-bottom text-white">Resolved<br> Tickets</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- white full width arrow object -->
            <img class="arrow-object" src="<?php echo e(asset('img/arrow-object-white.svg')); ?>" alt="">
        </div>
    </div>


    <!-- Section 1 -->
    <section class="section background-white text-center">
        <div id="description" style="color: #000;font-size: 30px; padding: 30px;border-radius: 20px;font-family: cursive;">
            <div class="input-field first-wrap">
                <b>Established since 1991</b><br>
                <br>
                All watches sold with a lifetime guarantee<br>
                All types and brand of watches repaired with a one-year guarantee<br>
                We take greate care of your timepiece.
            </div>
        </div>
        <div class="line">

            <hr class="break background-primary break-small break-center margin-bottom-50">
            <div class="carousel-3-blocks owl-carousel carousel-hide-pagination">

                <div class="item">
                    <div class="padding">
                        <img src="<?php echo e(asset('img/watch_auto1.jpg')); ?>" class="icon-sli-rocket text-size-60 text-primary center margin-bottom-15" style="width: 170px;">
                    </div>
                </div>
                <div class="item">
                    <div class="padding">
                        <img src="<?php echo e(asset('img/watch_ceramic3.jpg')); ?>" class="icon-sli-rocket text-size-60 text-primary center margin-bottom-15" style="width: 275px;">
                    </div>
                </div>
                <div class="item">
                    <div class="padding">
                        <img src="<?php echo e(asset('img/watch_metal.jpg')); ?>" class="icon-sli-rocket text-size-60 text-primary center margin-bottom-15" style="width: 250px;">
                    </div>
                </div>
                <div class="item">
                    <div class="padding">
                        <img src="<?php echo e(asset('img/watch_rubber.jpg')); ?>" class="icon-sli-rocket text-size-60 text-primary center margin-bottom-15" style="width: 230px;margin-top: -40px;">

                    </div>
                </div>
                <div class="item">
                    <div class="padding">
                        <img src="<?php echo e(asset('img/watch2.png')); ?>" class="icon-sli-rocket text-size-60 text-primary center margin-bottom-15" style="width: 200px;">

                    </div>
                </div>
            </div>
            <a href="<?php echo e(url('/products')); ?>" class="s-12 m-6 l-3 center button border-radius background-primary text-size-20 margin-top-60 text-white">More Categories</a>

        </div>
    </section>
    <!-- Section 2 -->
    <section class="section" data-image-src="<?php echo e(asset('img/clock-repair.jpg')); ?>">
        <div class="line">
            <div class="s-12 m-12 l-6">
                <h2 class="text-size-50 text-white"><b></b><br>
                    We repair all types of watches & clocks!</h2>

                <!-- white Start your Business object -->
                <img class="margin-left-20 margin-top-30 margin-bottom-60" src=<?php echo e(asset('img/start-your-business.svg')); ?> alt="">
            </div>
        </div>
        <!-- white full width arrow object -->
    </section>
</main>

<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
<?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\www\htdocs\ticktock123\resources\views/welcome.blade.php ENDPATH**/ ?>