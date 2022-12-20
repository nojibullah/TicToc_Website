<!DOCTYPE html>
<html lang="en-US">
<head>
    <?php echo $__env->make('Layout.head1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>


<body class="size-1280 primary-color-light-blue">
<!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
<div id="page-overlay" class="background-dark"></div>

<!-- HEADER -->
<?php echo $__env->make('Layout.admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                            <th scope="col">Purchased Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Watch Id</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Purchased Time</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php for($i=0;$i<count($history);$i++): ?>

                            <tr>
                                <th scope="row"><?php echo e($i+1); ?></th>
                                <th scope="row"><?php echo e($history[$i]->id); ?></th>
                                <td><?php echo e($history[$i]->user_name); ?></td>
                                <td><?php echo e($history[$i]->user_email); ?></td>
                                <td><?php echo e($history[$i]->buy_watch_id); ?></td>
                                <td><?php echo e($history[$i]->buy_watch_num); ?></td>
                                <td><?php echo e($history[$i]->purchased_time); ?></td>
                                <td><button type="button" class="btn btn-outline-danger remove_history" id = "<?php echo e($history[$i]->id); ?>">Remove</button></td>
                            </tr>

                        <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script>
    $(".remove_history").click(function(){

        var remove_id = $(this).attr('id');
        console.log(remove_id);
        var  data = new FormData();
        data.append('remove_id', remove_id);
        $.ajax({
            type: "POST",
            url: '<?php echo e(url("remove_history")); ?>',
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
                location.reload(true);
            },
            error: function(response){

            }
        });
    });
</script>
</main>

<!-- FOOTER -->
<footer>
    <?php echo $__env->make('Layout.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</footer>
<?php echo $__env->make('Layout.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\www\htdocs\ticktock\resources\views/Admin/purchase_history.blade.php ENDPATH**/ ?>