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
        <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-line-height-1 margin-top-130" style="height: 70px;">
        Repairing Progress
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
                            <th scope="col">REF Id</th>
                            <th scope="col">PROGRESS</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--display the repairing state --}}
                        @for($i=0;$i<count($message);$i++)
                            <tr>
                                <th scope="row">{{$message[$i]->id}}</th>
                                <td>{{$message[$i]->progress}}</td>
                                <td>{{$message[$i]->description}}</td>
                                <td>{{$message[$i]->price}}</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
                <div style="text-align: center;">
                    <a href="{{url('/send_message')}}"><button type="button" type="button" class="btn btn-success" style="margin-right: 150px;">Message</button></a>
                    <button type="button" type="button" class="btn btn-primary" style="margin-right: 150px;">PayPal</button>
                </div><br>
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