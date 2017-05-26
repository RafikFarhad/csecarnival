@extends('carnival')

@section('content')


<body id="schedulePage">

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
<header class="page-head" style="background-image: url('{{asset('carnival_assets/img/schedule_banner.png')}}');">
    <div class="header-wrapper" >
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Schedule</li>
                        </ol> 

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Schedule of IPvision SUST 6<sup>th</sup> CSE CARNIVAL 2017</h2>
                </div>

            </div>
            @if(sizeof($dates)==0)
            <h3 class="col-md-12 text-center">Full Schedule Will Be Added Soon.</h3>
            @endif
            
            <div class="row col-md-10">

                
                <?php $day = 1;?>
                @foreach($dates as $date)

                <div style="">
                    <h3>Day {{$day++}} ({{(new DateTime($date->date))->format('d/m/Y - l')}})</h3>
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Time</th>
                            <th>Programme Description</th>
                        </tr>
                        @foreach($events as $event)
                        <?php if($date->date!=$event->date) continue; ?>
                        <tr>
                            <td>{{(new DateTime($event->time))->format('h:i A')}}</td>
                            <td>{{$event->description}}</td> 
                        </tr>
                        @endforeach

                    </table>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
    @stop
