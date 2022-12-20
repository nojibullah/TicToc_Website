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
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1   margin-top-130">
            Buy
            
                
            

        </h1>
        <!-- white full width arrow object -->
        <img class="arrow-object" src="<?php echo e(asset('img/arrow-object-white.svg')); ?>" alt="">
    </header>

    <!-- Section 1 -->
    <div class="section background-white">
        <div class="line" style="max-width: 73rem;">
            <div class="margin">
                <div class="s-12 m-12 l-12">
                    <div class="line">
                        <div class="tabs background-primary-hightlight">
                            <div class="tab-item tab-active">
                                <div class="tab-content">
                                    <div class="margin2x">
                                        <?php for($i=0;$i<count($watches);$i++): ?>
                                            <article class="s-12 m-12 l-12 margin-bottom-40" style="margin-top: 30px;" >
                                                <a class="  "  style="text-align: -webkit-center;cursor:pointer;">
                                                    <img src="<?php echo e(asset($watches[$i]->path)); ?>" alt="" style="width: 320px; height:400px !important;">
                                                </a>
                                                <header>
                                                    <h3 class="text-strong text-size-20 margin-bottom-15" style="text-align: center;">
                                                        <a class="text-primary-hover text-dark"><?php echo e($watches[$i]->gender); ?> &nbsp;&nbsp;<?php echo e($watches[$i]->shape); ?> <?php echo e($watches[$i]->type); ?> Watch </a></h3>
                                                </header>
                                                <p style="text-align: center;"><?php echo e($watches[$i]->description); ?></p>
                                                <p class="text-size-14 margin-bottom-10" style="text-align: center">
                                                    Quantity left:<strong> <?php echo e($watches[$i]->quantity); ?></strong><br>
                                                <div class="input-group input-group-sm mb-3" style="    margin-left: 32%;">
                                                    <div class="input-group-prepend">
                                                        <input type="hidden" id = "one_price" value="<?php echo e($watches[$i]->price); ?>">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm"  name = "<?php echo e($watches[$i]->price); ?>">£<?php echo e($watches[$i]->price); ?>*</span>
                                                    </div>
                                                    
                                                    <form method="post" action="<?php echo e(url('watch_buy')); ?>">
                                                    <input  type="number" name="shares" id="shares" size="4" min="0" max="<?php echo e($watches[$i]->quantity); ?>" value = "1" style="text-align: center;">
                                                    


                                                    <button type="submit" class="btn btn-success buy" id = "<?php echo e($watches[$i]->id); ?>"  style="margin-left: 100px;">Buy</button>
                                                    </form>
                                                </div>
                                                </p>
                                                <hr>
                                            </article>
                                        <?php endfor; ?>
                                    </div>
                                    <div style="float: right; margin-right: 6%;">
                                        <div class="input-group mb-3" style="text-align: center;">

                                            <div class="input-group-append">
                                            <button type="button" class="btn btn-success">Total Price (&pound;)</button>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="result" style="width: 100px; text-align: right"></span>
                                            </div>
                                            <button type="button" class="btn btn-primary"  style="margin-left: 100px;">Payment with PayPal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //get the a watch's price
        var one_price= $('#one_price').val();
        //display a watch's price with text
        $('#result').text(one_price);
        //Calculate the total price when increase the number of watch that will be purchase
        $(":input").bind("keyup change", function(e) {
            console.log(one_price);
            $('#result').text($('#shares').val() * one_price);
        })


        
            
            
            
            
            
            
            
            

            
                
                
                
                
                
                
                
                
                
                    
                
                
                    
                
                
            
        
    </script>
</main>

<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</footer>
<?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\www\htdocs\ticktock\resources\views/buy.blade.php ENDPATH**/ ?>