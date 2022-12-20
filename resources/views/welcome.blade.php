<!doctype html>
{{--
    lang=lang="{{ str_replace('_', '-', app()->getLocale()) }}
    this is used to implement multi-language.
    But now no need.
--}}

<head>

   @include('Layout.head1')
</head>

<body class="size-1280 primary-color-light-blue">
<div id="app">
   <!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
   <div id="page-overlay" class="background-dark"></div>

   <!-- HEADER -->
@include('Layout.header1')
<!-- MAIN -->
   <main role="main">
      <!-- Main Carousel -->
      <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark">
         <div class="item">
            <div class="s-12 center">
               <!-- For ZOOM effect add classes "background-image-zoom-out" or "background-image-zoom-in" -->
               <div class="section text-center background-image-zoom-out">
                  <!-- ZOOMED Carousel Image -->
                  <div class="background-image background-image-object" style="background-image:url({{asset('img/business8.jpg')}})"></div>

                  <div class="line">
                     <hr class="animated-carousel-element break background-primary break-small break-center margin-top-130">
                     <p class="text-extra-thin animated-carousel-element text-size-25 text-white" >
                        <b>Welcome to Tick Tock!</b><br>
                        <first></first>
                        We offer high-standard repair services and we can customise any timepiece!<br>
                        You send it, we fix it, we update you about the progress of your repair and we send it back  to you!<br>
                        All from the comfort of your home.<br>
                        we take great care of your timepiece. <br>
                        Or if you're looking for a new timepiece, we also offer a variety of high-quality branded timepieces.
                     </p>
                     <hr class="animated-carousel-element break background-primary break-small break-center">
                  </div>
                  <!-- Pie Charts -->
                  <div class="line hide-s">
                     <div style="width: 108%;margin: auto;">
                        <div class="s-12 m-12 l-8 xl-6 margin-top-60 center">
                           <div class="margin2x">
                              <div class="s-12 m-3">
                      <span class="chart" data-percent="89">
    		                <span class="percent">89</span>
    	                </span>
                                 <h3 class="margin-top-bottom text-white">Timepiece Repair<br> Completion Rate</h3>
                              </div>
                              <div class="s-12 m-3">
                      <span class="chart" data-percent="98">
    		                <span class="percent">98</span>
    	                </span>
                                 <h3 class="margin-top-bottom text-white">Customer<br> Satisfaction</h3>
                              </div>
                              <div class="s-12 m-3">
                      <span class="chart" data-percent="96">
    		                <span class="percent">96</span>
    	                </span>
                                 <h3 class="margin-top-bottom text-white">Product<br> Satisfaction</h3>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <!-- white full width arrow object -->
            <img class="arrow-object" src="{{asset('img/arrow-object-white.svg')}}" alt="">
         </div>
      </div>
      <!-- Section 1 -->
      <section class="section background-white text-center">
         <div id="description" style="color: #000;font-size: 30px; padding: 30px;border-radius: 20px;font-family: cursive;">
            <div class="input-field first-wrap">
               <b>Established since 1991</b><br>
               <br>
               All timepieces sold with a lifetime guarantee
               {{--All watches sold with a lifetime guarantee<br>--}}
               {{--All types and brand of watches repaired with a one-year guarantee<br>--}}
               {{--We take greate care of your timepiece.--}}
            </div>
         </div>
         <div class="line">
            <hr class="break background-primary break-small break-center margin-bottom-50">
            <p class="text-extra-thin   text-size-25 text-dark" >
               {{--<p style="text-align: center;">--}}
               <b>Our Timepiece Selection</b></p>
            <div class="carousel-3-blocks owl-carousel carousel-hide-pagination">

               <div class="item">
                  <div class="padding">
                     <img src="{{asset('img/watch_auto1.jpg')}}" class="icon-sli-rocket text-size-60 text-primary center margin-bottom-15" style="width: 170px;">
                  </div>
               </div>
               <div class="item">
                  <div class="padding">
                     <img src="{{asset('img/watch_ceramic3.jpg')}}" class="icon-sli-rocket text-size-60 text-primary center margin-bottom-15" style="width: 275px;">
                  </div>
               </div>
               <div class="item">
                  <div class="padding">
                     <img src="{{asset('img/watch_metal.jpg')}}" class="icon-sli-rocket text-size-60 text-primary center margin-bottom-15" style="width: 250px;">
                  </div>
               </div>
               <div class="item">
                  <div class="padding">
                     <img src="{{asset('img/watch_rubber.jpg')}}" class="icon-sli-rocket text-size-60 text-primary center margin-bottom-15" style="width: 230px;margin-top: -40px;">
                  </div>
               </div>
               <div class="item">
                  <div class="padding">
                     <img src="{{asset('img/watch2.png')}}" class="icon-sli-rocket text-size-60 text-primary center margin-bottom-15" style="width: 200px;">
                  </div>
               </div>
            </div>
            <div style="width: 60%;margin: auto;">
               <a href="{{url('/products')}}" class="s-12 m-6 l-3 center button border-radius background-primary text-size-20 margin-top-60 text-white" style="float: left;">View Products</a>
               <a href="{{url('/recommendation')}}" class="s-12 m-6 l-3 center button border-radius background-primary text-size-20 margin-top-60 text-white" style="float: right;">Recommendations</a>
            </div>
         </div>
      </section>
      <!-- Section 2 -->
      <section class="section" data-image-src="{{asset('img/clock-repair.jpg')}}">
         <div class="line">
            <div class="s-12 m-12 l-6">
               <h2 class="text-size-50 text-white"><b></b><br>
                  We repair all types of timepieces, start your business</h2>
               <!-- white Start your Business object -->
               <img class="margin-left-20 margin-top-30 margin-bottom-60" src={{asset('img/start-your-business.svg')}} alt="">
            </div>
         </div>
         <!-- white full width arrow object -->
      </section>
      {{----}}
      <section class="  background-primary text-center" style="padding-bottom: 50px;">
         <div class="line">
            <div style="width: 93%;margin: auto;">
               <a href="{{url('/our_service')}}" class="s-12 m-6 l-3 center button border-radius background-green text-size-20 margin-top-60 text-white" style="float: left;">View our repair services</a>
               <a href="{{url('/send_message')}}" class="s-12 m-6 l-3 center button border-radius background-green text-size-20 margin-top-60 text-white" style="float: right;">Submit a repair service request</a>
            </div>
         </div>
      </section>
   </main>
</div>
<!-- FOOTER -->
<footer>
   @include('Layout.footer')
</footer>
@include('Layout.foot')
</body>
</html>