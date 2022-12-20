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

<!-- MAIN -->
<main role="main">
    <article>
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(<?php echo e(asset('img/business10.png')); ?>)">
            <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
                About Us
            </h1>
            <p class="animated-element text-white"></p>

            <!-- white full width arrow object -->
            <img class="arrow-object" src="<?php echo e(asset('img/arrow-object-white.svg')); ?>" alt="">
        </header>

        <!-- Section 1 -->
        <section class="section-small-padding background-white text-center">
            <div class="line">
                <i class="icon-sli-heart text-primary text-size-40"></i>
                <h2 class="text-dark text-size-50 text-m-size-40">Who <b>We Are?</b></h2>
            </div>
        </section>

        <!-- Section 2 -->
        <section class="section-same-height background-white">
            <div class="m-12 l-6 block-same-height section-block-2x background-grey">
                <h3 class="animated-element text-strong text-size-30 text-line-height-1 margin-bottom-20">What We Do for You?</h3>
                <p class="animated-element slow" style="font-size: 15px;">We are now looking to expand our business by offering our wonderful products and services worldwide.<br>
                    We are a specialist watch repair centre, based in the Wood Green shopping city located in the Market Hall, London.<br>
                    We started off as a very small unit and slowly expanded to a bigger unit. We have been in the same hands for over 25 years.<br>
                    We provide multiple watch repair services, including battery, strap, winder, glass repairs.<br>
                    We pride ourselves with great craftsmanship and built our business on providing a high level of service.<br>
                    Due to our 25 years in the market, we have a good reputation with a great number of repeat customers.<br>
                    Bring in your watch for a free assessment and we will quote you a price for your repair.<br>
                </p>
            </div>
            <div class="m-12 l-6 block-same-height section-block-2x" style="background-color: antiquewhite;">
                <h3 class="animated-element text-strong text-size-30 text-line-height-1 margin-bottom-20">If you have any queries contact us</h3>
                <p class="margin-bottom-10 text-dark" style="font-size: 20px; margin-top: 35px;"><b>Call on</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  0208 888 2257</p>

                <p class="margin-bottom-10 text-dark" style="font-size: 20px; margin-top: 15px;"><b>Working hours </b>&nbsp; Monday- Saturday 9am – 6pm & Sunday 11am-5pm </p>

                <p class="margin-bottom-10 text-dark" style="font-size: 20px;margin-top: 15px; "><b>Email</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; info@ticktockwatchrepairs.co.uk</p>
                <p class="margin-bottom-10 text-dark" style="font-size: 20px;margin-top: 15px;"><b>ADDRESS</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Located in The Mall Wood Green <br></p>
                <p class="margin-bottom-10 text-dark" style="font-size: 20px;margin-top: 5px;margin-left: 158px;"> Unit 13/Market Hall/Wood Green Shopping City/High Rd, London N22 6YE <br></p>
            </div>
        </section>
    </article>
</main>

<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
    <?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\www\htdocs\ticktock\resources\views/about.blade.php ENDPATH**/ ?>