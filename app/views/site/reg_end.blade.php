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
    <!-- header begin -->
    <!-- header begin -->
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/events_banner.jpg')}}');">
        <div class="header-wrapper">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Teams</a></li>
                            <li class="active">Programming Contest Teams</li>
                        </ol>

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->

    <style>
        @keyframes blink {  
    0% { color: red; }
    100% { color: black; }
}
@-webkit-keyframes blink {
    0% { color: red; }
    100% { color: black; }
}
.blink {
    -webkit-animation: blink 1s linear infinite;
    -moz-animation: blink 1s linear infinite;
    -ms-animation: blink 1s linear infinite;
    -o-animation: blink 1s linear infinite;
    animation: blink 1s linear infinite;
} 

    </style>

    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center" style='color:red' class="blink"> Registration Yet Not Started!!!{{-- Oops....Registration Closed !!! --}}</h2>
                  
                </div>
            </div>
        </div>
    </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop
