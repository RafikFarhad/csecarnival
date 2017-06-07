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
    <?php
    $data = DB::table('pages')->where('slug', 'sc')->first();
    
    ?>

    <header>

        <div class="header-wrapper">
            <img style="width: 100%;" src="{{asset('carnival_assets/banners').'/'.$data->banner}}">
        </div> <!-- /.header-wrapper -->


    <section class="main-content">
        <div class="container">
            <div class="contact-form">
            @include('site_includes.alert')
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
                    <h2 align="center" > Registration Started!!! <br>
                    Please visit <a href="http://csecarnival.com/event/softwareContest"> here</a> for procedure of registration.
                    </h2>
                  
                </div>
            </div>
        </div>
    </section>
            
            </div> <!-- end of /.contact-form -->
        </div>
    </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop
