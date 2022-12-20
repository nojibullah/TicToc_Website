<!DOCTYPE html>
<html lang="en-US">
<head>
    @include('Layout.head1')
    <link rel="stylesheet" href={{asset('css/file_upload.css')}}>
    <script type="text/javascript" src={{asset('js/upload.js')}}></script>
</head>

<body class="size-1280 primary-color-light-blue">
<!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
<div id="page-overlay" class="background-dark"></div>

<!-- HEADER -->
    @include('Layout.admin_header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- MAIN -->
<main role="main">
    <!-- Header -->
    <header class="section background-image text-center" style="background-image:url({{asset('img/business10.png')}})">
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-line-height-1 margin-bottom-30 margin-top-130" style="height: 70px;">

        </h1>
        <!-- white full width arrow object -->
        <img class="arrow-object" src="{{asset('img/arrow-object-white.svg')}}" alt="">
    </header><br>

    <div>
        <div class="tabs background-primary-hightlight">
            <!-- Latest posts -->
            <div class="tab-item tab-active">
                {{--This is the tag to switch from Repairing to Products--}}
                <a class="tab-label active-btn border-radius" data-url="/latest-posts">Products</a>
                <div class="tab-content shadow p-3 mb-5 bg-white rounded overflow-auto" style="width: 95%; margin: auto;">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Watch Type</th>
                            <th scope="col">Shape</th>
                            <th scope="col">Price (£)</th>
                            <th scope="col" style="    width: 370px;">Description</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Path</th>
                            <th scope="col">Upload Watch Img</th>
                            <th scope="col">Img Save</th>
                            <th scope="col">Update</th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0;$i<count($watches);$i++)
                            <tr>
                                <th scope="row">{{$watches[$i]->id}}</th>
                                <td>{{$watches[$i]->brand}}</td>
                                <td>{{$watches[$i]->gender}}</td>
                                <td>{{$watches[$i]->type}}</td>
                                <td>{{$watches[$i]->shape}}</td>
                                <td>{{$watches[$i]->price}}</td>
                                <td>{{$watches[$i]->description}}</td>
                                <td>{{$watches[$i]->quantity}}</td>
                                <td>{{$watches[$i]->path}}</td>
                                {{-- watch img upload functionality--}}
                                <form method="post"  enctype="multipart/form-data" action="{{url('/upload_watch_img')}}">
                                    @csrf
                                <td>
                                    {{--This is part to pass the row id , here row id is used with $watches[$i]->id--}}
                                    <input type="hidden" name="upload_watch_id" value="{{$watches[$i]->id}}">
                                    <div class="form-group" >
                                        <div class="input-group">
                                            <input type="text" class="form-control" style="margin-top: 0px;" readonly>
                                            <div class="input-group-btn" >
                                           <span class="fileUpload btn btn-success" style="    border-radius: 0px 5px 5px 0px;">
                                           <span class="upl" id="upload">Browser</span>
                                           <input  name = "file" type="file" id ="file"class="upload up" onchange="readURL(this);" /></span>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                    {{--
                                        uploaded watch img is saved when click 'save button
                                        In this case using form the row id that will be upload is passed to the controller
                                    '--}}
                                <td><button type="submit" class="btn btn btn-success upload_watch" id = "{{$watches[$i]->id}}">Save</button></td>
                                </form>
                                    {{--
                                        When click the update button, the Modal is display
                                    --}}
                                <td><button type="button" class="btn btn-outline-primary"   data-toggle="modal" data-target="#exampleModalCenter{{$watches[$i]->id}}">Update</button></td>
                                    {{--
                                        Using Ajax pass the row id that will be remove
                                        Here the passed parameter is the $watches[$i]->id, this is same to the row id that will be remove
                                    --}}
                                <td><button type="button" class="btn btn-outline-danger remove" id = "{{$watches[$i]->id}}">Remove</button></td>
                            </tr>
                            <div class="modal fade" id="exampleModalCenter{{$watches[$i]->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form method="post" action="{{url('upload_watches')}}">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Update Watch ID : {{$watches[$i]->id}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <label for="fname">Brand</label>
                                                    <input type="text"   name="watch_id" placeholder="" value="{{$watches[$i]->id}}" style="display: none;">
                                                    <input type="text"   name="brand" placeholder="" value="{{$watches[$i]->brand}}">
                                                    <label for="lname">Gender</label>
                                                    <input type="text"   name="gender" placeholder="" value="{{$watches[$i]->gender}}">
                                                    <label for="fname">Watch Type</label>
                                                    <input type="text"   name="type" placeholder="" value="{{$watches[$i]->type}}">
                                                    <label for="fname">Shape</label>
                                                    <input type="text"   name="shape" placeholder="" value="{{$watches[$i]->shape}}">
                                                    <label for="lname">Price</label>
                                                    <input type="text"   name="price" placeholder="" value="{{$watches[$i]->price}}">
                                                    <label for="country">Quantity</label>
                                                    <input type="text"   name="quantity" placeholder="" value="{{$watches[$i]->quantity}}">
                                                    <label for="subject">Description</label>
                                                    <textarea id="subject" name="description" placeholder="" style="height:80px">{{$watches[$i]->description}} </textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                {{--when click the 'Save changes' button, the data that will be update is passed using form with post method--}}
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endfor
                        </tbody>
                    </table>
                </div>
                <div style="width: 80%; margin: auto;text-align: right">
                    {{--
                        when click the 'ADD Watch' button, using the Ajax call the controller
                        url is 'add_watch' and the Route is as follows    Route::post('/add_watch', 'AdminController@add_watch');
                        Thus in the AdminController's add_watch method add new row.
                    --}}
                    <button type="button" class="btn btn-success" id = "add_watch" name = "ssss">ADD Watch</button>
                </div><br>
            </div>

            <!-- Most read posts -->
            <div class="tab-item">
                {{--This is the tag to switch from Products to Repairing--}}
                <a class="tab-label border-radius" data-url="/most-read">Repairing</a>
                <div class="tab-content shadow p-3 mb-5 bg-white rounded overflow-auto" style="width: 80%; margin: auto;">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Customer name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Watch Info (brand, type, back number)</th>
                            <th scope="col">Progress</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price (£)</th>
                            <th scope="col">Update</th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0;$i<count($repairing);$i++)
                            <tr>
                                <th scope="row">{{$repairing[$i]->id}}</th>
                                <td>{{$repairing[$i]->name}}</td>
                                <td>{{$repairing[$i]->email}}</td>
                                <td>{{$repairing[$i]->brand}}, {{$repairing[$i]->type}}, {{$repairing[$i]->back_number}}</td>
                                <td>{{$repairing[$i]->progress}}</td>
                                <td>{{$repairing[$i]->description}}</td>
                                <td>{{$repairing[$i]->price}}</td>
                                {{--When click the update button, the Modal is display (popup)--}}
                                <td><button type="button" class="btn btn-outline-primary" id = "update_repairing{{$watches[$i]->id}}" data-toggle="modal" data-target="#exampleModalCenter_repair{{$watches[$i]->id}}">Update</button></td>
                                <td><button type="button" class="btn btn-outline-danger remove_repairing" id = "{{$repairing[$i]->id}}">Remove</button></td>
                            </tr>
                            <div class="modal fade" id="exampleModalCenter_repair{{$watches[$i]->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <form method="post" action="{{url('upload_repairing')}}">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Update {{$repairing[$i]->name}}'s repair state</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <input type="text"   name="id" placeholder="" value="{{$repairing[$i]->id}}" style="display: none;">

                                                    <label for="fname">Progress</label>
                                                    <input type="text"   name="progress" placeholder="" value="{{$repairing[$i]->progress}}">

                                                    <label for="lname">Description</label>
                                                    <input type="text"   name="description" placeholder="" value="{{$repairing[$i]->description}}">

                                                    <label for="fname">Price</label>
                                                    <input type="text"   name="price" placeholder="" value="{{$repairing[$i]->price}}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                {{--when click the 'Save changes' button, the data that will be update is passed using form with post method--}}
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endfor

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#add_watch").click(function(){

            $.ajax({
                type: "POST",
                url: '{{url("add_watch")}}',
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

        $(".remove").click(function(){

            var remove_id = $(this).attr('id');
            console.log(remove_id);
            var  data = new FormData();
            data.append('remove_id', remove_id);
            $.ajax({
                type: "POST",
                url: '{{url("remove_watch")}}',
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

    <script>
        $(".remove_repairing").click(function(){

            var remove_id = $(this).attr('id');
            console.log(remove_id);
            var  data = new FormData();
            data.append('remove_id', remove_id);
            $.ajax({
                type: "POST",
                url: '{{url("remove_message")}}',
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
    @include('Layout.admin_footer')

</footer>
@include('Layout.foot')
</body>
</html>