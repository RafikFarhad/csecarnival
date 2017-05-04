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
                <h2>All Our Sponsors
                    <small>Thanks for Supporting us</small>
                    <!-- <img  class="img-responsive center-block" src="http://csecarnival.com/uploads/sponsors.jpg" alt="Sponsors"> -->
                </h2>
                <h2 align=center>Title Sponsor
                <img style="height:200px"  class="img-responsive center-block" src="http://csecarnival.com/uploads/sponsor/ipvision.jpg" alt="Sponsors">
                </h2>
                {{-- <h2 align=center>Supported By
                <img style="height:200px"  class="img-responsive center-block" src="http://csecarnival.com/uploads/sponsor/surecash.jpg" alt="Sponsors">
                </h2> --}}
                {{-- <h2 align=center>SIUSC Sponsor
                <img style="height:200px"  class="img-responsive center-block" src="http://csecarnival.com/uploads/sponsor/x10.jpg" alt="Sponsors">
                </h2> --}}
                <h2 align=center>T-Shirt Sponsor
                <h4 align=center>SIUPC</h4>
                <img style="height:200px"  class="img-responsive center-block" src="http://csecarnival.com/uploads/sponsor/therap.jpg" alt="Sponsors">
                </h2>
                {{-- <h2 align=center>Bag and Surprise Dinner Sponsor
                <img style="height:200px"  class="img-responsive center-block" src="http://csecarnival.com/uploads/sponsor/surecash.jpg" alt="Sponsors">
                </h2>
                <h2 align=center>Sponsors
                <img style="height:200px"  class="img-responsive center-block" src="http://csecarnival.com/uploads/sponsor/all.jpg" alt="Sponsors">
                </h2>
                <h2 align=center>Media Partner
                <img style="height:200px"  class="img-responsive center-block" src="http://csecarnival.com/uploads/sponsor/media.jpg" alt="Sponsors">
                </h2> --}}
            </div>
        </div>
        
        

<!-- this section commented out by masiur under the direction of ratul vai 
            <div class="row" align=center>
                    <h3>Title Sponsor</h3>
                    
                    <img style="height:200px" class="img-responsive center-block" src="https://pbs.twimg.com/profile_images/472948686217961473/E8-mXoQ3.png" alt="Event Featured Image"><h3>IPvision Canada Inc.</h3>

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
                    <h3>Project Showcasing</h3>
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
this section commented out by masiur under the direction of ratul vai-->
    </div>
</section>


<!--  Necessary scripts  -->
<!--  Necessary scripts  -->

@include('site_includes.footer')
@stop