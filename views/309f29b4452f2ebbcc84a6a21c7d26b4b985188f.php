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
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-line-height-1 margin-bottom-30 margin-top-130" style="height: 70px;">

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
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Type</th>
                            <th scope="col">Quality</th>
                            <th scope="col">Credit</th>
                            <th scope="col">Come</th>
                            <th scope="col">Service</th>
                            <th scope="col">Content</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0;$i<count($recommendation);$i++): ?>
                            <tr>
                                <th scope="row"><?php echo e($recommendation[$i]->id); ?></th>
                                <td><?php echo e($recommendation[$i]->name); ?></td>
                                <td><?php echo e($recommendation[$i]->email); ?></td>
                                <td><?php echo e($recommendation[$i]->brand); ?></td>
                                <td><?php echo e($recommendation[$i]->type); ?></td>
                                <td><?php echo e($recommendation[$i]->quality); ?></td>
                                <td><?php echo e($recommendation[$i]->credit); ?></td>
                                <td><?php echo e($recommendation[$i]->come); ?></td>
                                <td><?php echo e($recommendation[$i]->service); ?></td>
                                <td><?php echo e($recommendation[$i]->content); ?></td>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</footer>
<?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\www\htdocs\ticktock\resources\views/view_recommendations.blade.php ENDPATH**/ ?>