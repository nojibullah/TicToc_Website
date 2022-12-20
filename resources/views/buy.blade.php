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
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1   margin-top-130">
            Buy
            {{--@for($i=0;$i<count($buy_watch_number_temp);$i++)--}}
                {{--{{$buy_watch_number_temp[i]}}--}}
            {{--@endfor--}}

        </h1>
        <!-- white full width arrow object -->
        <img class="arrow-object" src="{{asset('img/arrow-object-white.svg')}}" alt="">
    </header>

    <!-- Section 1 -->
    <div class="section background-white">
        <div class="line" style="max-width: 73rem;">
            <div class="margin">
                <div class="s-12 m-12 l-12">
                    <div class="line">
                        <div class="tabs background-primary-hightlight">
                            <div class="tab-item tab-active">
                                <div class="tab-content">
                                    <div class="margin2x">
                                        @for($i=0;$i<count($watches);$i++)
                                            <article class="s-12 m-12 l-12 margin-bottom-40" style="margin-top: 30px;" >
                                                <a class="  "  style="text-align: -webkit-center;cursor:pointer;">
                                                    <img src="{{asset($watches[$i]->path)}}" alt="" style="width: 320px; height:400px !important;">
                                                </a>
                                                <header>
                                                    <h3 class="text-strong text-size-20 margin-bottom-15" style="text-align: center;">
                                                        <a class="text-primary-hover text-dark">{{$watches[$i]->gender}} &nbsp;&nbsp;{{$watches[$i]->shape}} {{$watches[$i]->type}} Watch </a></h3>
                                                </header>
                                                <p style="text-align: center;">{{$watches[$i]->description}}</p>
                                                <p class="text-size-14 margin-bottom-10" style="text-align: center">
                                                    Quantity left:<strong> {{$watches[$i]->quantity}}</strong><br>
                                                <div class="input-group input-group-sm mb-3" style="    margin-left: 32%;">
                                                    <div class="input-group-prepend">
                                                        <input type="hidden" id = "one_price" value="{{$watches[$i]->price}}">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm"  name = "{{$watches[$i]->price}}">£{{$watches[$i]->price}}*</span>
                                                    </div>
                                                    {{--
                                                        The total quantiry is displayed.
                                                        User can increase the number of watch that will buy as the quantity of watches.
                                                    --}}
                                                    <form method="post" action="{{url('watch_buy')}}">
                                                        @csrf
                                                    <input  type="number" name="shares" id="shares" size="4" min="0" max="{{$watches[$i]->quantity}}" value = "1" style="text-align: center;">
                                                    {{--
                                                        When click the 'Buy' tag, the watch's id that will be purchase is passed using Ajax.
                                                    --}}


                                                    <button type="submit" class="btn btn-success buy" id = "{{$watches[$i]->id}}"  style="margin-left: 100px;">Buy</button>
                                                    </form>
                                                </div>
                                                </p>
                                                <hr>
                                            </article>
                                        @endfor
                                    </div>
                                    <div style="float: right; margin-right: 6%;">
                                        <div class="input-group mb-3" style="text-align: center;">

                                            <div class="input-group-append">
                                            <button type="button" class="btn btn-success">Total Price (&pound;)</button>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="result" style="width: 100px; text-align: right"></span>
                                            </div>
                                            <button type="button" class="btn btn-primary"  style="margin-left: 100px;">Payment with PayPal</button>
                                        </div>
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
        //get the a watch's price
        var one_price= $('#one_price').val();
        //display a watch's price with text
        $('#result').text(one_price);
        //Calculate the total price when increase the number of watch that will be purchase
        $(":input").bind("keyup change", function(e) {
            console.log(one_price);
            $('#result').text($('#shares').val() * one_price);
        })


        {{--$(".buy").click(function(){--}}
            {{--//when click the 'Buy' tag, receive the watch's id and number--}}
            {{--var buy_watch_id = $(this).attr('id');--}}
            {{--var buy_watch_number = $('#shares').val();--}}
            {{--console.log(buy_watch_id);--}}
            {{--console.log(buy_watch_number);--}}
            {{--var  data = new FormData();--}}
            {{--data.append('buy_watch_id', buy_watch_id);--}}
            {{--data.append('buy_watch_number', buy_watch_number);--}}

            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: '{{url("watch_buy")}}',--}}
                {{--data:data ,--}}
                {{--processData: false, // high importance!--}}
                {{--contentType:false ,--}}
                {{--cache: false,--}}
                {{--async:true,--}}
                {{--enctype:'multipart/form-data',--}}
                {{--beforeSend: function (request) {--}}
                    {{--return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));--}}
                {{--},--}}
                {{--success: function(response){--}}
                    {{--location.reload(true);--}}
                {{--},--}}
                {{--error: function(response){  }--}}
            {{--});--}}
        {{--});--}}
    </script>
</main>

<!-- FOOTER -->
<footer>
    @include('Layout.footer')

</footer>
@include('Layout.foot')
</body>
</html>