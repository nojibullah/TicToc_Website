
    
        
            
        
    
    
        
        
        
    
    
        
    
    
        
            
        
        
            
        
        
            
        
    
    

        
            
        
    

<header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-primary-dott full-width sticky">
        <div class="top-nav">
            <!-- mobile version logo -->
            <div class="logo hide-l hide-xl hide-xxl">
                <a href="index.html" class="logo">
                    <!-- Logo White Version -->
                    <img class="logo-white" src=<?php echo e(asset('img/watch_logo.png')); ?> alt="">
                    <!-- Logo Dark Version -->
                    <img class="logo-dark" src=<?php echo e(asset('img/watch_logo.png')); ?> alt="">
                </a>
            </div>
            <p class="nav-text"></p>
            <div id = "head">
                <!-- left menu items -->
                <div class="top-nav left-menu" >
                    <ul class="right top-ul chevron">
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo e(url('/our_service')); ?>">Timepiece repair services</a></li>
                    </ul>
                </div>

                <!-- logo -->
                <ul class="logo-menu" style="">
                    <a href="<?php echo e(url('/')); ?>" class="logo">
                        <!-- Logo White Version -->
                        <img class="logo-white" src=<?php echo e(asset('img/watch_logo_1.png')); ?> alt="">
                        <!-- Logo Dark Version -->
                        <img class="logo-dark" src=<?php echo e(asset('img/watch_logo_1.png')); ?> alt="" style="margin-left: 60px;">
                    </a>
                </ul>
                <!-- right menu items -->
                <div class="top-nav right-menu" >
                    <li><a href="<?php echo e(url('/products')); ?>">Products</a></li>
                    <li><a href="<?php echo e(url('/about_us')); ?>">About us</a></li>
                    <ul class="top-ul chevron"></ul>
                    
                        
                            
                                
                            
                        
                    
                    
                        
                    
                    
                        
                    
                    <?php if(Auth::check()): ?>
                        <li>
                            <div class="btn-group users">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="background-color: transparent; color: #759c6f;">
                                    <i class="fas fa-user-circle" style="font-size: 20px;"></i> <?php echo e(Auth::user()->name); ?>

                                </button>
                                <div class="dropdown-menu" style="background-color: transparent;border-radius: 11px;border: 2px solid rgb(193, 161, 140);
                                 padding: 9px; width: 190px; height: 135px; position: absolute;transform: translate3d(0px, 53px, 0px); will-change: transform; top: 2px;left: 0px;">
                                    <a class="dropdown-item" href="<?php echo e(url('/view_repairing')); ?>" style="padding: 5px;text-transform: capitalize;"><i class="fas fa-user-tie"></i> My Repair</a>
                                    <a class="dropdown-item" href="<?php echo e(url('/recommendation')); ?>" style="padding: 5px;text-transform: capitalize;"><i class="fas fa-comment-dots"></i> Recommendation</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?> " style="padding: 5px;text-transform: capitalize;"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </div>
                        </li>
                    <?php else: ?>
                        <?php if(Route::has('login')): ?>
                            <div class="top-right links"  >
                                <?php if(auth()->guard()->check()): ?>
                                    
                                <?php else: ?>
                                
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="background-color: transparent;color:wheat;">
                                          Login
                                    </button>
                                    <div class="dropdown-menu" style="background-color: transparent;border-radius: 11px;border: 2px solid rgb(193, 161, 140);
                                     padding: 9px; width: 160px; height: 100px; position: absolute;transform: translate3d(0px, 53px, 0px); will-change: transform;  ">
                                        <a class="dropdown-item" href="<?php echo e(route('login')); ?>" style="padding: 5px;text-transform: capitalize;"><i class="fas fa-sign-in-alt"></i> Login</a>
                                        <div class="dropdown-divider"></div>
                                        <?php if(Route::has('register')): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('register')); ?>" style="padding: 5px;text-transform: capitalize;"><i class="fas fa-registered"></i> Register</a>
                                        <?php endif; ?>
                                    </div>
                                
                                    
                                    
                                        
                                    
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>
</header><?php /**PATH D:\www_xampp\htdocs\ticktock\resources\views/Layout/header1.blade.php ENDPATH**/ ?>