<style>
    .left-menu, .right-menu {
        padding-top: 50px;
        width: calc(50% - 165px);
        padding-left: 190px;
    }
</style>
<header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-primary-dott full-width sticky">
        <div class="top-nav">
            <!-- mobile version logo -->
            <div class="logo hide-l hide-xl hide-xxl">
                <a href="index.html" class="logo">
                    <!-- Logo White Version -->
                    <img class="logo-white" src={{asset('img/watch_logo1.png')}} alt="">
                    <!-- Logo Dark Version -->
                    <img class="logo-dark" src={{asset('img/watch_logo1.png')}} alt="">
                </a>
            </div>
            <p class="nav-text"></p>
            <div id = "head">
                <!-- left menu items -->
                <div class="top-nav left-menu">
                    <ul class="right top-ul chevron">
                        <li>
                            <a href="{{url('/admin')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{url('/view_message')}}">Message</a>
                        </li>


                    </ul>
                </div>

                <!-- logo -->
                <ul class="logo-menu" style="">
                    <a href="{{url('/')}}" class="logo">
                        <!-- Logo White Version -->
                        <img class="logo-white" src={{asset('img/watch_logo_1.png')}} alt="">
                        <!-- Logo Dark Version -->
                        <img class="logo-dark" src={{asset('img/watch_logo_1.png')}} alt="" style="margin-left: 60px;">
                    </a>
                </ul>

                <!-- right menu items -->
                <div class="top-nav right-menu">
                    <ul class="top-ul chevron">
                        <li><a href="{{url('/view_recommend')}}">Recommend</a></li>
                        <li><a href="{{url('/view_history')}}">Purchase history</a></li>
                        <li><a href="{{url('/products')}}">Products</a></li>




                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>