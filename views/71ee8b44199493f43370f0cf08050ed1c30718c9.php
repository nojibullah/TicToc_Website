<!DOCTYPE html>
<html lang="en-US">
<head>
<?php echo $__env->make('Layout.head1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .description{
            text-align: left;
            border-radius: 25px;
            border: 2px solid #c1c5bb;
            padding: 20px 20px 0px 20px;
            width: 60%;
            height: auto;
            margin-left: 282px;
        }
        .address{
            text-align: left;
            border-radius: 25px;
            border: 2px solid #c1c5bb;
            padding: 20px 20px 0px 20px;
            width: 18%;
            height: auto;
            margin-left: 40px;
            margin-top: 45px;
        }
    </style>

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
                Our Services
            </h1>
            <!-- white full width arrow object -->
            <img class="arrow-object" src="<?php echo e(asset('img/arrow-object-white.svg')); ?>" alt="">
        </header>


        <section class="  background-white" style="padding-bottom: 10px; margin-top: 50px;">
            <div class="line">
                <div class="s-12 m-6 l-9 description text-black"   >
                    <h4 class="  text-size-20 text-line-height-5 margin-bottom-5" style=" ">
                        You post it, we fix it while you track the price and progress of your repair and finally<br>
                        we send it back through the post!<br>
                        If you are unhappy with the price estimation, we will send your watch back for free!<br>
                        Recorded delivery used for safety purposes.<br>
                        All repairs come with a one year guarantee.
                        <br><br>
                        SUBMIT A REPAIR REQUEST & SEND YOUR TIMEPIECE DIRECTLY TO US TO GET STARED.
                    </h4>
                </div>
                <div class="s-12 m-6 l-2 address"  >
                    <h4 class="  text-size-19 text-line-height-5 margin-bottom-5"  >
                        Postal address:<br>
                        Tick Tock unit 13b,<br> north London, Woodgreen,<br>
                        The mail shopping centre
                    </h4>
                </div>
            </div><br>
        </section>
        <a href="<?php echo e(url('/send_message')); ?>">
            <div style="text-align: center;">
                <button type="button" type="button" class="btn btn-success">Submit Repair Service Request</button>
            </div>
        </a>

        <!-- Section 1 -->
        <section class="section background-white" >

            

            <div class="line" style="margin-top: 20px;">
                <div class="margin2x">
                    <div class="s-12 m-6 l-4 margin-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-equalizer text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Clock repairs</h3>
                            <p>We repair all types of clocks. Including antique clocks, wall clocks, mechanical clocks,
                                mantel piece clocks, grandfather clocks, carriage clocks and many more.</p>
                        </div>
                    </div>
                    <div class="s-12 m-6 l-4 margin-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-layers text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Watch repairs </h3>
                            <p>We specialise in watch repairs and have been repairing watches since 1991.
                                We repair watches at a very reasonable price, especially compared to our competitors. We repair all brands of watches and our repairs come with a guarantee..</p>
                        </div>
                    </div>
                    <div class="s-12 m-6 l-4 margin-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-share text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Watch full service </h3>
                            <p>We aim to fully restore your watch to a working condition.
                                The watch is completely disassembled, checked and tested for any worn parts.
                                It is then re-built, re-sealed for water resistance and thoroughly cleaned to restore your watch, bringing it back to a like new condition.
                            </p>
                        </div>
                    </div>
                    <div class="s-12 m-6 l-4 margin-m-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-paper-plane text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Watch battery replacement </h3>
                            <p>A lot of the time, a Watch just needs a simple battery replacement to bring it back to life.
                                We do a battery replacement within minutes while our customers wait shortly.
                                We have a large variety of top quality branded batteries (Sony, Renata, etc) for all watches.
                                Every day for the past 25 years, Tick Tock has replaced thousands of batteries for various watches.
                                Our battery replacements come with a three-year guarantee.</p>
                        </div>
                    </div>
                    <div class="s-12 m-6 l-4 margin-m-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-diamond text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Watch strap replacement</h3>
                            <p>Over time straps can start to wear and tear, showing signs of age and damage.
                                We offer a variety of excellent quality watch straps, including metal steel, genuine leather and elastic straps.
                                A good-looking strap can uplift the appearance of your watch. We can do a strap replacement while you wait. </p>
                        </div>
                    </div>
                    <div class="s-12 m-6 l-4 margin-m-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-rocket text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Watch glass replacement</h3>
                            <p>Sometimes the glass on a watch can have scratches, cracks or even be completely smashed.
                                We offer to replace the glass and fit in a new glass for your watch.
                                We can replace glasses in different shapes and sizes. </p><br><br><br><br><br>
                        </div>
                    </div>

                    <div class="s-12 m-6 l-4 margin-m-bottom-60">
                        <div class="float-left">
                            <i class="icon-sli-share text-primary text-size-40 text-line-height-1"></i>
                        </div>
                        <div class="margin-left-60">
                            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-20">Winder repairs</h3>
                            <p>Watch winders repaired and replaced.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </article>
</main>

<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
    <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\www_xampp\htdocs\ticktock\resources\views/service.blade.php ENDPATH**/ ?>