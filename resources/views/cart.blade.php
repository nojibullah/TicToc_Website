<!DOCTYPE html>
<html lang="en-US">
<head>
     @include('Layout.head1')
</head>

<body class="size-1280 primary-color-light-blue">
<!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
<div id="page-overlay" class="background-dark"></div>

<!-- HEADER -->
@include('Layout.header1')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- MAIN -->
<main role="main">
    <!-- Header -->
    <header class="section background-image text-center" style="background-image:url({{asset('img/business10.png')}})">
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            Cart
        </h1>
        <!-- white full width arrow object -->

        <img class="arrow-object" src="{{asset('img/arrow-object-white.svg')}}" alt="">
    </header>

    <!-- Section 1 -->
    <div class="section background-white">
        <div class="line">
            <div class="margin">
                <div class="s-12 m-12 l-12">
                    <div class="line">
                        <div class="tabs background-primary-hightlight">
                            <div class="tab-item tab-active">
                                <div class="tab-content">

                                    <div class="margin2x">
                                        @for($i=0;$i<count($watches);$i++)
                                            <article class="s-12 m-12 l-4 margin-bottom-40" style="margin-top: 30px;" >
                                                <a class="image-hover-zoom margin-bottom-30"  style="text-align: -webkit-center;cursor:pointer;">
                                                    <img src="{{asset($watches[$i]->path)}}" alt="" style="width: 180px; height: 250px !important;">
                                                </a>
                                                <header>
                                                    <h3 class="text-strong text-size-20 margin-bottom-15" style="text-align: center;">
                                                        <a class="text-primary-hover text-dark">{{$watches[$i]->gender}} &nbsp;&nbsp;{{$watches[$i]->shape}} {{$watches[$i]->type}} Watch </a></h3>

                                                </header>
                                                <p>{{$watches[$i]->description}}</p>
                                                <p class="text-size-14 margin-bottom-10" style="text-align: center">
                                                    Quantity left:<strong> {{$watches[$i]->quantity}}</strong><br>
                                                    <div class="input-group input-group-sm mb-3" style="    margin-left: 32%;">
                                                    {{--
                                                        In this case, when click the 'Let's Buy' tag,the watch's id that will be purchase added to the url.
                                                        Here the watch's id added into '/buy_page/'
                                                        This parameter will be pass using get method
                                                        That is, at the web.php , the Route is as follows   Route::get('/buy_page/{watch_id}', 'UserController@buy_page');
                                                        The watch's id that will be purchased is passed with watch_id  (look {watch_id} )
                                                     --}}
                                                        <a href="{{url('/buy_page/'.$watches[$i]->id)}}">
                                                            <button type="button" class="btn btn-success buy_btn" id = "{{$watches[$i]->id}}" style="margin-left: 100px;">Let's Buy</button></a>
                                                    </div>
                                                </p>
                                                <hr>
                                            </article>
                                        @endfor
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- FOOTER -->
<footer>
    @include('Layout.footer')

</footer>
    @include('Layout.foot')
</body>
</html>