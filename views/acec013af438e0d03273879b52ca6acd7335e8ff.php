<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo e(asset('login/images/icons/favicon.ico')); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('login/css/main.css')); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--===============================================================================================-->

</head>
<body>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<div class="limiter">
	<div class="container-login100">

		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="<?php echo e(asset('login/images/img-01.png')); ?>" alt="IMG">
			</div>


				<span class="login100-form-title">
						User Login
					</span>

				<div class="wrap-input100 validate-input">
					<input class="input100" type="text"  id = "email" name="email" placeholder="Email" value="" required>
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
				</div>
				<div class="wrap-input100 validate-input">
					<input class="input100" type="password"  id = "password" name="pass" placeholder="Password" value="" required>
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
				</div>

				<div class="container-login100-form-btn">
					<button  type="submit "   id = "login" class="login100-form-btn">
						Login
					</button>
				</div>

				<div class="text-center p-t-136">
					<a class="txt2" href="<?php echo e(url('/sign_up')); ?>">
						Create your Account
						<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
					</a>
				</div>

		</div>
	</div>
</div>
<!--===============================================================================================-->

<script>
    $("#login").click(function(){

        var email = $('#email').val();
        var password = $('#password').val();

        var  data = new FormData();
        data.append('email', email);
        data.append('password', password);
        console.log(email);
        console.log(password);

        $.ajax({

            type: "POST",
            url: '<?php echo e(url("user_login")); ?>',
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


                setTimeout(function() {

                    setCookie('email',email,60);
                    setCookie('id',60);

                }, 1000);
                window.location.replace('<?php echo e(url('products')); ?>');

            },
            error: function(response){
                console.log(password);
            }
        });
    });

    function setCookie(id,email,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = id + "=" + email + ";" + expires + ";path=/";
    }
</script>
</body>
</html><?php /**PATH D:\www\htdocs\ticktock\resources\views/sign_in.blade.php ENDPATH**/ ?>