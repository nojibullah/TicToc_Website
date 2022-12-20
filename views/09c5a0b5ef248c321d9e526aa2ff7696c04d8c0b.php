<!DOCTYPE html>
<html lang="en-US">
<head>
     <?php echo $__env->make('Layout.head1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="size-1280 primary-color-light-blue">
<!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
<div id="page-overlay" class="background-dark"></div>

<!-- HEADER -->
<?php echo $__env->make('Layout.header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!-- MAIN -->
<main role="main">
    <!-- Header -->
    <header class="section background-image text-center" style="background-image:url(<?php echo e(asset('img/business10.png')); ?>)">
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Cart
        </h1>
        <!-- white full width arrow object -->

        <img class="arrow-object" src="<?php echo e(asset('img/arrow-object-white.svg')); ?>" alt="">
    </header>

    <!-- Section 1 -->
    <div class="section background-white">
        <div class="line">
            <div class="margin">
                <div class="s-12 m-12 l-12">
                    <div class="line">
                        <div class="tabs background-primary-hightlight">
                            <div class="tab-item tab-active">
                                <div class="tab-content">

                                    <div class="margin2x">
                                        <?php for($i=0;$i<count($watches);$i++): ?>
                                            <article class="s-12 m-12 l-4 margin-bottom-40" style="margin-top: 30px;" >
                                                <a class="image-hover-zoom margin-bottom-30"  style="text-align: -webkit-center;cursor:pointer;">
                                                    <img src="<?php echo e(asset($watches[$i]->path)); ?>" alt="" style="width: 180px; height: 250px !important;">
                                                </a>
                                                <header>
                                                    <h3 class="text-strong text-size-20 margin-bottom-15" style="text-align: center;">
                                                        <a class="text-primary-hover text-dark"><?php echo e($watches[$i]->gender); ?> &nbsp;&nbsp;<?php echo e($watches[$i]->shape); ?> <?php echo e($watches[$i]->type); ?> Watch </a></h3>

                                                </header>
                                                <p><?php echo e($watches[$i]->description); ?></p>
                                                <p class="text-size-14 margin-bottom-10" style="text-align: center">
                                                    Quantity left:<strong> <?php echo e($watches[$i]->quantity); ?></strong><br>
                                                    <div class="input-group input-group-sm mb-3" style="    margin-left: 32%;">
                                                    
                                                        <a href="<?php echo e(url('/buy_page/'.$watches[$i]->id)); ?>">
                                                            <button type="button" class="btn btn-success buy_btn" id = "<?php echo e($watches[$i]->id); ?>" style="margin-left: 100px;">Let's Buy</button></a>
                                                    </div>
                                                </p>
                                                <hr>
                                            </article>
                                        <?php endfor; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</footer>
    <?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\www\htdocs\ticktock\resources\views/cart.blade.php ENDPATH**/ ?>