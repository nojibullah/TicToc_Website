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
        <header class="section background-image text-center" style="background-image:url('img/shop2.jpg')">
            <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
                Contact Us
            </h1>
            <p class="animated-element text-white"></p>
            <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        <!-- Section 1 -->
        <section class="section-small-padding background-white text-center">
            <div class="line">
                <i class="icon-sli-heart text-primary text-size-40"></i>
                <h2 class="text-dark text-size-50 text-m-size-40">We are here for you <b class="text-primary">24/7</b></h2>
            </div>
        </section>

        <!-- Section 2 -->
        <section class="full-width background-grey">
            <div class="m-12 l-6">
                <div class="padding-3x">
                    <div class="margin2x">

                        <div class="l-12 xl-6 margin-bottom-60">
                            <div class="float-left">
                                <i class="icon-sli-location-pin text-primary text-size-40 text-line-height-1"></i>
                            </div>
                            <div class="margin-left-60">
                                <h2 class="text-size-20 margin-bottom-10 text-strong">Company Address</h2>
                                <p>Aviation Way 99</p>
                                <p>Los Angeles, USA</p>
                            </div>
                        </div>

                        <div class="l-12 xl-6 margin-bottom-60">
                            <div class="float-left">
                                <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
                            </div>
                            <div class="margin-left-60">
                                <h2 class="text-size-20 margin-bottom-10 text-strong">E-mail</h2>
                                <p><a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
                                <p><a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>
                            </div>
                        </div>

                        <div class="l-12 xl-6 margin-bottom-60">
                            <div class="float-left">
                                <i class="icon-sli-earphones-alt text-primary text-size-40 text-line-height-1"></i>
                            </div>
                            <div class="margin-left-60">
                                <h2 class="text-size-20 margin-bottom-10 text-strong">Phone Numbers</h2>
                                <p>0800 4521 800 50</p>
                                <p>0450 5896 625 16</p>
                                <p>0798 6546 465 </p>
                            </div>
                        </div>

                        <div class="l-12 xl-6">
                            <div class="float-left">
                                <i class="icon-sli-paper-plane text-primary text-size-40 text-line-height-1"></i>
                            </div>
                            <div class="margin-left-60">
                                <h2 class="text-size-20 margin-bottom-10 text-strong">Billing information</h2>
                                <p>Hendrerit in vulputate duis autem vel eum iriure dolor in velit esse molestie consequat, vel illum dolore nulla facilisis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-12 l-6">
                <!-- MAP section - change latitude, longitude and zoom data (get the latitude and the longitude from google maps) -->
                <div data-latitude="33.8718108" data-longitude="-118.380636" data-zoom="12" id="map"></div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="section background-dark">
            <div class="s-12 m-12 l-4 center">
                <h3 class="text-size-30 margin-bottom-40 text-center">Functional Ajax <b>Contact Form</b></h3>
                <!-- If you want to make a field required, add the "required" class to the input. -->
                <!-- The form e-mail address you can change on file resp-email.php on line 4. -->
                <form name="contactForm" class="customform ajax-form text-white" method="post" enctype="multipart/form-data">
                    <div class="line">
                        <div class="margin">
                            <div class="s-12 m-12 l-6">
                                <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                                <p class="email-error form-error">Please enter your e-mail.</p>
                            </div>
                            <div class="s-12 m-12 l-6">
                                <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
                                <p class="name-error form-error">Please enter your name.</p>
                            </div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="s-12">
                            <input name="subject" class="required subject" placeholder="Subject" title="Subject" type="text" />
                            <p class="subject-error form-error">Please enter your subject.</p>
                        </div>
                        <div class="s-12">
                            <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
                            <p class="message-error form-error">Please enter your message.</p>
                        </div>
                        <div class="s-12">
                            <input type="file" name="file[]" />
                        </div>
                        <!-- full-name-field is hidden antirobot field -->
                        <input name="full-name-field" type="text" id="full-name-field" class="full-name-field" />
                        <div class="s-12">
                            <a class="captcha-button text-white background-primary border-radius margin-bottom">
                                <span class="not-a-robot-icon"><i class="icon-check text-white"></i></span>
                                <span class="not-a-robot-text">I'm not a robot</span>
                            </a>
                        </div>
                        <!-- The submit button text you can edit in the file validation.sj on the line 8. -->
                        <div class="s-12 button-parent"></div>
                        <div class="line">
                            <p class="mail-success form-success">Your message has been sent successfully.</p>
                            <p class="mail-fail form-error">Sorry, error occured this time sending your message.</p>
                        </div>
                    </div>
                </form>
            </div>
        </section>


    </article>


    </article>
</main>

<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
<?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\www\htdocs\ticktock\resources\views/contact.blade.php ENDPATH**/ ?>