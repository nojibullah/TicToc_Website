<!DOCTYPE html>
<html lang="en-US">
<head>
    @include('Layout.head1')
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
    </header>

    <div>
        <div class="tabs background-primary-hightlight">
            <!-- Latest posts -->
            <div class="tab-item tab-active">

                <div class="tab-content shadow p-3 mb-5 bg-white rounded overflow-auto" style="width: 80%; margin: auto;">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Purchased Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Watch Id</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Purchased Time</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @for($i=0;$i<count($history);$i++)

                            <tr>
                                <th scope="row">{{$i+1}}</th>
                                <th scope="row">{{$history[$i]->id}}</th>
                                <td>{{$history[$i]->user_name}}</td>
                                <td>{{$history[$i]->user_email}}</td>
                                <td>{{$history[$i]->buy_watch_id}}</td>
                                <td>{{$history[$i]->buy_watch_num}}</td>
                                <td>{{$history[$i]->purchased_time}}</td>
                                <td><button type="button" class="btn btn-outline-danger remove_history" id = "{{$history[$i]->id}}">Remove</button></td>
                            </tr>

                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script>
    $(".remove_history").click(function(){

        var remove_id = $(this).attr('id');
        console.log(remove_id);
        var  data = new FormData();
        data.append('remove_id', remove_id);
        $.ajax({
            type: "POST",
            url: '{{url("remove_history")}}',
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