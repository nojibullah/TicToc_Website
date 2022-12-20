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
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-line-height-1 margin-top-130" style="height: 70px;">
        Repairing Progress
        </h1>
        <!-- white full width arrow object -->
        <img class="arrow-object" src="<?php echo e(asset('img/arrow-object-white.svg')); ?>" alt="">
    </header>

    <div>
        <div class="tabs background-primary-hightlight">
            <!-- Latest posts -->
            <div class="tab-item tab-active">

                <div class="tab-content shadow p-3 mb-5 bg-white rounded overflow-auto" style="width: 80%; margin: auto;">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">REF Id</th>
                            <th scope="col">PROGRESS</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        <?php for($i=0;$i<count($message);$i++): ?>
                            <tr>
                                <th scope="row"><?php echo e($message[$i]->id); ?></th>
                                <td><?php echo e($message[$i]->progress); ?></td>
                                <td><?php echo e($message[$i]->description); ?></td>
                                <td><?php echo e($message[$i]->price); ?></td>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
                <div style="text-align: center;">
                    <a href="<?php echo e(url('/send_message')); ?>"><button type="button" type="button" class="btn btn-success" style="margin-right: 150px;">Message</button></a>
                    <button type="button" type="button" class="btn btn-primary" style="margin-right: 150px;">PayPal</button>
                </div><br>
        </div>
    </div>
</main>

<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
<?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\www_xampp\htdocs\ticktock\resources\views/view_repairing.blade.php ENDPATH**/ ?>