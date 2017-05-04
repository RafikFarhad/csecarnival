@extends('carnival')

@section('content')


<body>

<!--
=============================================
  top navigation bar
=============================================
-->

@include('site_includes.topbar')
        <!-- top navigation bar FINISH-->

<!--
=============================================
    main navigation bar
=============================================
-->

@include('site_includes.navbar')
        <!-- end of /#navigation -->
<!-- header begin -->
<header class="page-head" style="background-image: url('{{asset('carnival_assets/img/events_banner.jpg')}}');">
    <div class="header-wrapper" >
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Events</li>
                    </ol> 

                </div>
            </div>
        </div> --> <!-- /.container -->
    </div> <!-- /.header-wrapper -->
</header> <!-- /.page-head (header end) -->


<section id="events" class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>All Our Events
                    <small>The Event Description of This Programme</small>
                </h2>
            </div>
        </div>

        <div class="event-description">
            <div class="row">
                <div class="col-md-6">
                    <img style="height:100px" class="img-responsive center-block" src="{{asset('carnival_assets/img/pc_banner.png')}}" alt="Event Featured Image">
                </div>

                <div class="col-md-6">
                    <h3>SUST Inter University Programming Contest (SIUPC)</h3>

                    <a href="{{route('event.pc')}}" class="btn btn-black">Event Details</a>
                    <a href="{{route('reg.pc')}}" class="btn btn-black">Register Now</a>

                </div>
            </div>
        </div>

        <div class="event-description">
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <img style="height:100px" class="img-responsive center-block" src="{{asset('carnival_assets/img/sc_banner.png')}}" alt="Event Featured Image">
                </div>

                <div class="col-md-6 col-md-pull-6">
                    <h3>SUST Inter University Software Contest (SIUSC)</h3>

                    <a href="{{route('event.sc')}}" class="btn btn-black">Event Details</a>
                    <a href="{{route('reg.sc')}}" class="btn btn-black">Register Now</a>                </div>
            </div>
        </div>


        <div class="event-description">
            <div class="row">
                <div class="col-md-6">
                    <img style="height:100px" class="img-responsive center-block" src="{{asset('carnival_assets/img/ps_banner.png')}}" alt="Event Featured Image">
                </div>

                <div class="col-md-6">
                    <h3>Robotics Competition</h3>
                    <a href="{{route('event.ps')}}" class="btn btn-black">Event Details</a>
                    <a href="{{route('reg.ps')}}" class="btn btn-black">Register Now</a>
                </div>
            </div>
        </div>


        <div class="event-description">
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <img style="height:100px" class="img-responsive center-block" src="{{asset('carnival_assets/img/gc_banner.png')}}" alt="Event Featured Image">
                </div>

                <div class="col-md-6 col-md-pull-6">
                    <h3>Gaming Competition</h3>

                    <a href="{{route('event.gc')}}" class="btn btn-black">Event Details</a>
                    <a href="{{route('reg.gc')}}" class="btn btn-black">Register Now</a>
                </div>
            </div>
        </div>

    </div>
</section>


<!--  Necessary scripts  -->
<!--  Necessary scripts  -->

@include('site_includes.footer')
@stop