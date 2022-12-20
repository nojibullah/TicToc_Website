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
    <header class="section background-image text-center" style="background-image:url({{asset('img/business8.jpg')}})">
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1  margin-top-130">
            Recommendations
        </h1>
        <!-- white full width arrow object -->
        <img class="arrow-object" src="{{asset('img/arrow-object-white.svg')}}" alt="">
    </header>
    <div>

    </div>
    <div class="container" style="min-height: 300px; margin-top: 50px; margin-bottom: 50px;    max-width: 1300px;">
        <p class="text-size-20" >Recommended products for you</p>

            {{--display the watches that similar with watch that user purchased--}}
        @if(count($data)==0)
         <p style="text-align: center;font-size: 20px;">-"WE HAVE NO RECOMMENDATIONS FOR YOU"-</p>
        @endif
            @for($i=0;$i<count($data);$i++)

                <article class="s-12 m-12 l-3 margin-bottom-40" style="margin-top: 30px;text-align: -webkit-center;" >
                    <a class="  "  style="text-align: -webkit-center;cursor:pointer;">
                        <img src="{{asset($data[$i]->path)}}" alt="" style="width: 220px; border-radius: 20px; height:300px !important; ">
                    </a><br>

                    <header>
                        <h4 class=" text-size-16 margin-bottom-15" style="text-align: center;">
                            <a class="text-primary-hover text-dark"> {{$data[$i]->description}} Watch </a><br><br>
                            Quantity:{{$data[$i]->quantity}}<br>
                            Price:{{$data[$i]->price}}
                        </h4>
                        <div style="width: 70%;margin: auto;">
                            <button class="btn btn-outline-success add_cart" id = "{{$data[$i]->id}}">Add Cart</button>
                            <a class="text-more-info text-primary margin-top-6" id = "go_buy" href="{{url('/cart')}}" style="float: right;font-size: 16px;">Go Cart</a>
                        </div>
                    </header>
                    <hr>
                </article>
            @endfor
        {{--<form method="post" action="{{url('send_recommend')}}">--}}
            <p class="text-size-20" >
                Do you have any recommendations for us?<br>
                Please leave some constructive feedback.
            </p>
            <label for="lname">About the type of watch</label>
            <input type="text"  id = "type" name="type" placeholder="" required >

            <label for="fname">About the quality of service</label>
            <input type="text"   id = "quality" name="quality" placeholder="" required >

            <label for="fname">About the credit</label>
            <input type="text"  id = "credit"  name="credit" placeholder="" required >

            <label for="lname">Would come here again</label>
            <input type="text"  id = "come" name="come" placeholder="" required >

            <label for="country">About the service</label>
            <input type="text"  id = "service" name="service" placeholder="" required >

            <label for="subject">Content</label>
            <textarea id = "content" name="content" placeholder="" style="height:200px" required ></textarea>
            <div style="text-align: right;">
                <input type="submit" id = "submit"  value="Submit">
            </div>
    </div>
    <script>

    </script>

    <script>
        {{--when click the button that class is 'add_cart', this event occurs --}}
        $(".add_cart").click(function(){
            //get the id that clicked button's id.
            //This is btn_id
            var btn_id = $(this).attr('id');
            //FormData is the JavaScript Object and is used for sending data.
            var  data = new FormData();
            //The append() method inserts specified content at the end of the selected elements.
            data.append('watch_id', btn_id);
            if($(this).text() =='Add Cart'){
                //if button's text is 'Add Cart', change with 'Success'
                //and insert add to the flag valuable.
                $(this).text('Success!');
                data.append('flag', 'add');
            }
            else{
                $(this).text('Add Cart');
                data.append('flag', 'delete');
            }
            $.ajax({
                type: "POST",

                // pass the parameter with post method
                //url is "add_cart"
                //so Route is as follows   Route::post('/add_cart', 'UserController@add_cart');
                // the parameter will be pass into the UserController's add_cart method
                url: '{{url("add_cart")}}',
                data:data ,
                processData: false, // high importance!
                contentType:false ,
                cache: false,
                async:true,
                enctype:'multipart/form-data',
                beforeSend: function (request) {
                    // briefly X-CSRF-Token is used to verify AJAX requests when send the data
                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                },
                success: function(response){

                },
                error: function(response){
                    console.log(btn_id);
                }
            });
        });


    //    send_recommendation(submit)
        $("#submit").click(function(){
            //when click the 'submit' button

            var type = $('#type').val();
            var quality = $('#quality').val();
            var credit = $('#credit').val();
            var come = $('#come').val();
            var service = $('#service').val();
            var content = $('#content').val();

            console.log(type);
            console.log(quality);
            console.log(credit);
            console.log(come);
            console.log(service);
            console.log(content);

            var  data = new FormData();
            data.append('type', type);
            data.append('quality', quality);
            data.append('credit', credit);
            data.append('come', come);
            data.append('service', service);
            data.append('content', content);

            $.ajax({
                type: "POST",
                url: '{{url("send_recommend")}}',
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
                   alert('Sent Successfully!');
                    // location.reload(true);
                },
                error: function(response){  }
            });
        });

    </script>
</main>

<!-- FOOTER -->
<footer>
    @include('Layout.foot')
</footer>
    @include('Layout.footer')
</body>
</html>