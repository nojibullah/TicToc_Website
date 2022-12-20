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
        <header class="section background-image text-center" style="background-image:url(<?php echo e(asset('img/business8.jpg')); ?>)">
            <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1   margin-top-130">
                Free fast shipping & Easy returns
            </h1>
            <p class="animated-element text-white"></p>

            <!-- white full width arrow object -->
            <img class="arrow-object" src="<?php echo e(asset('img/arrow-object-white.svg')); ?>" alt="">
        </header>

        <!-- Section 1 -->
        <section class="section-small-padding background-white text-center">
            <div class="line">
                <i class="icon-sli-heart text-primary text-size-40"></i>
                <h2 class="text-dark text-size-50 text-m-size-40">What Can I help you?</h2>
            </div>
        </section>

        <!-- Section 2 -->
        <section class="section-same-height background-white">
            <div class="m-12 l-12 block-same-height section-block-2x background-grey">
                <h3 class="animated-element text-strong text-size-30 text-line-height-1 margin-bottom-20">Free fast shipping</h3><br>
                <p class="animated-element slow" style="font-size: 20px;">
                    All orders with free standard shipping will be delivered in 5-7 days. All orders would be trackable.<br><br>

                    Standard Shipping: 5-7 Days (Free)<br><br>

                    Expedited Shipping: 2 Days ($10)<br><br>

                    Priority Shipping: 1 Day ($15)<br>
                </p>
            </div>
        </section>
        <section class="section-same-height background-white" >
            <div class="m-12 l-12 block-same-height section-block-2x " style="background-color: antiquewhite;">
                <h3 class="animated-element text-strong text-size-30 text-line-height-1 margin-bottom-20">Free fast shipping</h3>
                <p class="animated-element slow" style="font-size: 20px;">
                    We take customer satisfaction very seriously at ticktock.co. and want you to have a watch that is in every sense the perfect fit.
                    We offer an easy return service for all non-personalised(custom) goods within 30 days of delivery.<br><br>

                    Please contact us through email at ticktock@dapperwatch.co before you return the watches so that
                    we can provide you with a return merchandise authorization  code that you can include in the package
                    for our easy reference.<br><br>

                    If you wish to exchange an item, please return the item you no longer wish to keep and forward the details of your new order on ticktock@dapperwatch.co<br>



                    You will be responsible for paying for your own shipping costs for returning your item.<br><br>

                    ticktock.co. will ship back the new item/s at no extra cost to the customer.<br><br>

                    You should consider using a trackable shipping service.<br><br>

                    SALE ITEMS<br>
                    We offer a 14-day refund policy for sale items. To be eligible for a return, your item must be unused and in the same condition that you received it.
                    It must also be in the original packaging.<br><br>

                    REFUNDS<br>
                    Once your return is received and inspected,
                    we will send you an email to notify you that we have received your returned item. We will also notify you of the approval or rejection of your refund. If you are approved, then your refund will be processed, and a credit will automatically be applied to your credit card or original method of payment,
                    within a certain amount of days.<br><br>
                </p>
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
</html><?php /**PATH D:\www_xampp\htdocs\ticktock\resources\views/shipping_return.blade.php ENDPATH**/ ?>