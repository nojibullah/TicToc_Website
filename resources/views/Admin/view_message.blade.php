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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact Info</th>
                            <th scope="col">Model Number</th>
                            <th scope="col">Type of Service</th>
                            <th scope="col">Content</th>

                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0;$i<count($message);$i++)
                            <tr>
                                <th scope="row">{{$message[$i]->id}}</th>
                                <td>{{$message[$i]->name}}</td>
                                <td>{{$message[$i]->email}}</td>
                                <td>{{$message[$i]->phone}}</td>
                                <td>{{$message[$i]->brand}}</td>
                                <td>{{$message[$i]->type}}</td>
                                <td>{{$message[$i]->message}}</td>

                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- FOOTER -->
<footer>
    @include('Layout.admin_footer')

</footer>
@include('Layout.foot')
</body>
</html>