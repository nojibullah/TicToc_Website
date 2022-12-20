<!DOCTYPE html>
<html lang="en-US">
<head>
    {{--
        head.blade.php , head1.blade.php, header1.blade.php, footer.blade.php, foot.blade.php, admin_footer.blade.php and admin_header.blade.php is in the Layout folder.

    --}}
        @include('Layout.head1')
</head>
<body class="size-1280 primary-color-light-blue">

<!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
<div id="page-overlay" class="background-dark"></div>

<!-- HEADER -->
@include('Layout.header1')
<!-- MAIN -->
<div id="app">
    <main role="main">

        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url({{asset('img/business8.jpg')}})">
            <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1  margin-top-130">
                Products
            </h1>
            <!-- white full width arrow object -->

            <img class="arrow-object" src="{{asset('img/arrow-object-white.svg')}}" alt="">
        </header>

        <!-- Section 1 -->
        <div class="section background-white">
            <div class="line">
                <div class="margin">
                    <div class="s-12 m-12 l-12">
                        <div class="s130">
                            {{--
                                Pass the parameter with post method,
                                Here url is products.
                                Thus the route is as follows; Route::post('/products', 'UserController@search_products');
                                products is '/products' and speciry the Usercontroller's serach_products
                                When click the search button, the parameters will be pass to this Usercontroller's serach_products.

                                search key_work, gender, shape and type's parameters will pass with post method.
                            --}}
                            <form method="post" action="{{url('products')}}">

                                {{-- search functionality--}}
                                <div class="inner-form">
                                    <div class="input-field first-wrap">
                                        <div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                            </svg>
                                        </div>
                                        <input id="search_word" type="text" name = "search_word" placeholder="What are you looking for?" />
                                    </div>
                                    <div class="input-field second-wrap">
                                        <button class="btn-search" type="submit">SEARCH</button>
                                    </div>
                                </div>

                                {{--Gender select option--}}
                                <div class="s-12 m-12 l-3 input-group mb-3" style="margin-left: 30px; width: 260px;">
                                    <select class="custom-select" id="inputGroupSelect02" name = "gender">
                                        <option selected>Choose...</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Genger</label>
                                    </div>
                                </div>

                                {{--Shape select option--}}
                                <div class="s-12 m-12 l-3 input-group mb-3" style="margin-left: 30px; width: 260px;">
                                    <select class="custom-select" id="inputGroupSelect02" name = "shape">
                                        <option selected>Choose...</option>
                                        <option value="1">Circle</option>
                                        <option value="2">Rect</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Shape</label>
                                    </div>
                                </div>

                                {{--type select option--}}
                                <div class="s-12 m-12 l-3 input-group mb-3" style="margin-left: 30px;width: 260px;">
                                    <select class="custom-select" id="inputGroupSelect02" name = "type">
                                        <option selected>Choose...</option>
                                        <option value="1">Metal</option>
                                        <option value="2">Leather</option>
                                        <option value="3">Rubber</option>
                                        <option value="4">Ceramic</option>
                                        <option value="5">Automatic</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Watch types</label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {{--display the search result's number--}}
                        <p>Results: {{ count($watches) }}</p>

                        <div class="line">

                            <div class="tabs background-primary-hightlight">
                                <div class="tab-item tab-active">
                                    <div class="tab-content">
                                        <div class="margin2x">

                                            {{--
                                                Array the watches received from the Usercontroller's products method
                                                The method is as follows:
                                                public function products(){
                                                        $watches=DB::table('products')->get();
                                                        return view('home',compact('watches'));
                                                }
                                                Here array containg the valuables $watches is passed to this home.blade.php
                                                This is widely used in website.
                                                So you have to keep this :)
                                                And {{asset($watches[$i]->path)}} fetch the path of the ith in the array
                                                For example 'img/watch/man_circle_metal.jpg' is the 1th watch's path in the 'products' table.
                                            --}}
                                            @for($i=0;$i<count($watches);$i++)
                                                <article class="s-12 m-12 l-4 margin-bottom-40" style="margin-top: 30px;" >
                                                    <a class="image-hover-zoom margin-bottom-30"  style="text-align: -webkit-center;cursor:pointer; ">
                                                        <img src="{{asset($watches[$i]->path)}}" alt="" style="width: 180px; height: 250px !important;">
                                                    </a>
                                                    <header>
                                                        <h3 class="text-strong text-size-20 margin-bottom-15" style="text-align: center;">
                                                            <a class="text-primary-hover text-dark">{{$watches[$i]->gender}} &nbsp;&nbsp;{{$watches[$i]->shape}} {{$watches[$i]->type}} Watch </a></h3>
                                                    </header>
                                                    <div style="min-height:65px; "><p>{{$watches[$i]->description}}</p></div>

                                                    <p class="text-size-14 margin-bottom-10" style="text-align: center">
                                                        Quantity left:<strong> {{$watches[$i]->quantity}}</strong><br>
                                                        <strong>£{{$watches[$i]->price}}* </strong>
                                                    </p>
                                                    {{--
                                                        This button is one to add watches into the cart page.
                                                        The watch's id that will be add is passed using Ajax.
                                                        This button's id is just the watch's id that will be add to the cart page
                                                     --}}
                                                    <button class="btn btn-outline-success add_cart" id = "{{$watches[$i]->id}}">Add Cart</button>
                                                    <a class="text-more-info text-primary margin-top-0" id = "go_buy" href="{{url('/cart')}}" style="float: right;font-size: 16px;">Go Cart</a>
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
</div>
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
                console.log(btn_id);
            },
            error: function(response){
                console.log(btn_id);
            }
        });
    });

</script>


<!-- FOOTER -->
<footer>
    @include('Layout.foot')

</footer>
@include('Layout.footer')

</body>
</html>