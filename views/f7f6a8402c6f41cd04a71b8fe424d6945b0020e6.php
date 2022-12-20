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
    <header class="section background-image text-center" style="background-image:url(<?php echo e(asset('img/business8.jpg')); ?>)">
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1   margin-top-130">
            Service Request
        </h1>
        <!-- white full width arrow object -->
        <img class="arrow-object" src="<?php echo e(asset('img/arrow-object-white.svg')); ?>" alt="">
    </header>
    <div>

    </div>
    <div class="container" style="min-height: 300px; margin-top: 50px; margin-bottom: 50px;max-width: 510px;">
        <div style=" margin-top: 15px;">
            <h4>
               Please fill in relevant information and post your timepiece directly to us.
                You will be able to track the progress of your repair going to "My Repair" on the drop down menu under our account name.
            </h4></div>
            
            <form method="post" action="<?php echo e(url('send_message')); ?>">
                <label for="f_name">Contact Info</label>
                <input type="text" name="phone" placeholder="Enter your contact info" required>
                <label for="country">Model number</label>
                <input type="text"   name="brand" placeholder="Enter your model number" required>
                <label for="country">Type of service</label>
                <input type="text"   name="type" placeholder="Enter your type of service" required>
                <label for="subject">Description</label>
                <textarea id="subject" name="message" placeholder="Problem description" style="height:200px" required></textarea>
                <div style="text-align: right;">
                    <input type="submit" value="Submit" >
                </div>
            </form>
    </div>

</main>

<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
    <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\www_xampp\htdocs\ticktock\resources\views/send_message.blade.php ENDPATH**/ ?>