


        <!DOCTYPE html>
<html lang="en-US">
<head>
    <?php echo $__env->make('Layout.head1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        #cart_icon{

            margin-right: 10px;
            font-size: 18px;
            margin-top: 2px;
            float: left;
        }
        #back_icon{

            margin-right: 10px;
            font-size: 18px;
            margin-top: 2px;
            float: left;
        }
        #go_buy{
            float: right;
            font-size: 16px;
        }
    </style>
</head>


<body class="size-1280 primary-color-light-blue">

<!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
<div id="page-overlay" class="background-dark"></div>

<!-- HEADER -->
<?php echo $__env->make('Layout.header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!-- MAIN -->
<main role="main">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Header -->
    <header class="section background-image text-center" style="background-image:url(<?php echo e(asset('img/business10.jpg')); ?>)">
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1  margin-top-130">
            Products
        </h1>
        <!-- white full width arrow object -->

        <img class="arrow-object" src="<?php echo e(asset('img/arrow-object-white.svg')); ?>" alt="">
    </header>

    <!-- Section 1 -->
    <div class="section background-white">
        <div class="line">
            <div class="margin">
                <div class="s-12 m-12 l-12">
                    <div class="s130">
                        <form method="post" action="<?php echo e(url('products')); ?>">
                            <div class="inner-form">
                                <div class="input-field first-wrap">
                                    <div class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                        </svg>
                                    </div>
                                    <input id="search_word" type="text" name = "search_word" placeholder="What are you looking for?" />
                                </div>
                                <div class="input-field second-wrap">
                                    <button class="btn-search" type="submit">SEARCH</button>
                                </div>
                            </div>

                            <div class="s-12 m-12 l-3 input-group mb-3" style="margin-left: 30px; width: 260px;">
                                <select class="custom-select" id="inputGroupSelect02" name = "gender">
                                    <option selected>Choose...</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Genger</label>
                                </div>
                            </div>


                            <div class="s-12 m-12 l-3 input-group mb-3" style="margin-left: 30px; width: 260px;">
                                <select class="custom-select" id="inputGroupSelect02" name = "shape">
                                    <option selected>Choose...</option>
                                    <option value="1">Circle</option>
                                    <option value="2">Rect</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Shape</label>
                                </div>
                            </div>

                            <div class="s-12 m-12 l-3 input-group mb-3" style="margin-left: 30px;width: 260px;">
                                <select class="custom-select" id="inputGroupSelect02" name = "type">
                                    <option selected>Choose...</option>
                                    <option value="1">Metal</option>
                                    <option value="2">Leather</option>
                                    <option value="3">Rubber</option>
                                    <option value="4">Ceramic</option>
                                    <option value="5">Automatic</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Watch types</label>
                                </div>
                            </div>

                        </form>
                    </div>
                    <p>Results: <?php echo e(count($watches)); ?></p>

                    <div class="line">

                        <div class="tabs background-primary-hightlight">
                            <div class="tab-item tab-active">
                                <div class="tab-content">
                                    <div class="margin2x">
                                        <?php for($i=0;$i<count($watches);$i++): ?>
                                            <article class="s-12 m-12 l-4 margin-bottom-40" style="margin-top: 30px;" >
                                                <a class="image-hover-zoom margin-bottom-30"  style="text-align: -webkit-center;cursor:pointer;">
                                                    <img src="<?php echo e(asset('img/watch_auto1.jpg')); ?>" alt="" style="min-width: 180px;    min-height: 280px">
                                                </a>
                                                <header>
                                                    <h3 class="text-strong text-size-20 margin-bottom-15" style="text-align: center;">
                                                        <a class="text-primary-hover text-dark"><?php echo e($watches[$i]->gender); ?> &nbsp;&nbsp;<?php echo e($watches[$i]->shape); ?> <?php echo e($watches[$i]->type); ?> Watch </a></h3>

                                                </header>
                                                <p><?php echo e($watches[$i]->description); ?></p>
                                                <p class="text-size-14 margin-bottom-10" style="text-align: center">
                                                    Quantity left:<strong> <?php echo e($watches[$i]->quantity); ?></strong><br>
                                                    <strong>£<?php echo e($watches[$i]->price); ?>* </strong>
                                                </p>
                                                <button class="btn btn-outline-success add_cart" id = "<?php echo e($watches[$i]->id); ?>">Add Cart</button>
                                                <a class="text-more-info text-primary margin-top-0" id = "go_buy" href="<?php echo e(url('/cart')); ?>">Let's buy</a>
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
    <script>

        $(".add_cart").click(function(){

            var btn_id = $(this).attr('id');
            console.log(btn_id);
            var  data = new FormData();
            data.append('watch_id', btn_id);
            if($(this).text() =='Add Cart'){
                $(this).text('Success!');
                data.append('flag', 'add');
            }
            else{
                $(this).text('Add Cart');
                data.append('flag', 'delete');
            }
            $.ajax({
                type: "POST",
                url: '<?php echo e(url("add_cart")); ?>',
                data:data ,
                processData: false, // high importance!
                contentType:false ,
                cache: false,
                async:true,
                enctype:'multipart/form-data',
                beforeSend: function (request) {
                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                },
                success: function(response){
                    alert('ok');
                },
                error: function(response){
                    console.log(btn_id);
                }
            });
        });

    </script>
</main>


<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</footer>
<?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH D:\www\htdocs\ticktock\resources\views/products.blade.php ENDPATH**/ ?>