{{--<style>--}}
    {{--@media screen and (min-width: 992px) {--}}
        {{--.left-menu {--}}
            {{--margin-left: -100px;--}}
        {{--}--}}
    {{--}--}}
    {{--.margin-bottom-30:hover {--}}
        {{---ms-transform: scale(1.5); /* IE 9 */--}}
        {{---webkit-transform: scale(1.5); /* Safari 3-8 */--}}
        {{--transform: scale(1.2);--}}
    {{--}--}}
    {{--.dropdown-item:hover{--}}
        {{--color: wheat;--}}
    {{--}--}}
    {{--@media screen and (max-width: 495px) {--}}
        {{--.btn-info {--}}
            {{--margin-left: 210px;--}}
        {{--}--}}
        {{--.responsive_menu{--}}
            {{--display:block;--}}
        {{--}--}}
        {{--.users{--}}
            {{--display: none;--}}
        {{--}--}}
    {{--}--}}
    {{--@media screen and (min-width: 496px) {--}}

        {{--.responsive_menu{--}}
            {{--display:none;--}}
        {{--}--}}
    {{--}--}}
{{--</style>--}}
<header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-primary-dott full-width sticky">
        <div class="top-nav">
            <!-- mobile version logo -->
            <div class="logo hide-l hide-xl hide-xxl">
                <a href="index.html" class="logo">
                    <!-- Logo White Version -->
                    <img class="logo-white" src={{asset('img/watch_logo.png')}} alt="">
                    <!-- Logo Dark Version -->
                    <img class="logo-dark" src={{asset('img/watch_logo.png')}} alt="">
                </a>
            </div>
            <p class="nav-text"></p>
            <div id = "head">
                <!-- left menu items -->
                <div class="top-nav left-menu" >
                    <ul class="right top-ul chevron">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/our_service')}}">Timepiece repair services</a></li>
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
                <div class="top-nav right-menu" >
                    <li><a href="{{url('/products')}}">Products</a></li>
                    <li><a href="{{url('/about_us')}}">About us</a></li>
                    <ul class="top-ul chevron"></ul>
                    {{--<li class="responsive_menu">--}}
                        {{--<div class="btn-group" style="margin-left: -48px;">--}}
                            {{--<button type="button" class="btn btn-info"  style="background-color: transparent;color:wheat;">--}}
                                {{--<i class="fas fa-user-circle" style="font-size: 20px;"></i> Jackson--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="responsive_menu">--}}
                        {{--<a href="{{url('/view_repairing')}}" style="text-transform: capitalize;">My Repair</a>--}}
                    {{--</li>--}}
                    {{--<li class="responsive_menu" >--}}
                        {{--<a href="logout.php" style="text-transform: capitalize;">Log out</a>--}}
                    {{--</li>--}}
                    @if (Auth::check())
                        <li>
                            <div class="btn-group users">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="background-color: transparent; color: #759c6f;">
                                    <i class="fas fa-user-circle" style="font-size: 20px;"></i> {{ Auth::user()->name }}
                                </button>
                                <div class="dropdown-menu" style="background-color: transparent;border-radius: 11px;border: 2px solid rgb(193, 161, 140);
                                 padding: 9px; width: 190px; height: 135px; position: absolute;transform: translate3d(0px, 53px, 0px); will-change: transform; top: 2px;left: 0px;">
                                    <a class="dropdown-item" href="{{url('/view_repairing')}}" style="padding: 5px;text-transform: capitalize;"><i class="fas fa-user-tie"></i> My Repair</a>
                                    <a class="dropdown-item" href="{{url('/recommendation')}}" style="padding: 5px;text-transform: capitalize;"><i class="fas fa-comment-dots"></i> Recommendation</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }} " style="padding: 5px;text-transform: capitalize;"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    @else
                        @if (Route::has('login'))
                            <div class="top-right links"  >
                                @auth
                                    {{--<li><a href="{{ url('/') }}">Home</a></li>--}}
                                @else
                                {{----}}
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" style="background-color: transparent;color:wheat;">
                                          Login
                                    </button>
                                    <div class="dropdown-menu" style="background-color: transparent;border-radius: 11px;border: 2px solid rgb(193, 161, 140);
                                     padding: 9px; width: 160px; height: 100px; position: absolute;transform: translate3d(0px, 53px, 0px); will-change: transform;  ">
                                        <a class="dropdown-item" href="{{ route('login') }}" style="padding: 5px;text-transform: capitalize;"><i class="fas fa-sign-in-alt"></i> Login</a>
                                        <div class="dropdown-divider"></div>
                                        @if (Route::has('register'))
                                        <a class="dropdown-item" href="{{ route('register') }}" style="padding: 5px;text-transform: capitalize;"><i class="fas fa-registered"></i> Register</a>
                                        @endif
                                    </div>
                                {{----}}
                                    {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                                    {{--@if (Route::has('register'))--}}
                                        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                                    {{--@endif--}}
                                @endauth
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>