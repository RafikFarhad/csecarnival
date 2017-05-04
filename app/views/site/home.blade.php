@extends('carnival')

@section('content')
    <body onload="countdown(2017,08,04,09,00)">

    <section class="header">
        <div id="window-height">
            <div class="heading-wrapper">

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
                    Welcome to <br> IPvision SUST 6<sup>th</sup> CSE Carnival 2017{{-- Event is Over, See you in next Carnival --}}
                =============================================
                -->

                @include('site_includes.navbar')
                <!-- end of /#navigation -->

                <div class="heading-content text-center">
                    <div class="container">
                        <div class="timer">

                            <div class="row">
                                <h1 style="
    padding-top: 3%;
    padding-bottom: 6%;
    font-size: 60px;
"> Welcome to <br> IPvision SUST 6<sup>th</sup> CSE Carnival 2017 </h1>
                            </div>

                           <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
                                    <div class="numbers" id="count2"></div>
                                </div>

                                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 counter1 text-center" id="spacer1">
                                    <div class="day numbers" id="dday"></div>
                                    <div class="hr numbers" id="dhour"></div>
                                    <div class="min numbers" id="dmin"></div>
                                    <div class="sec numbers" id="dsec"></div>
                                </div>
                            </div>
                        </div>  <!--  end of .timer  -->

                        <a href="{{route('event.pc')}}" class="btn btn-registeration text-capitalize">
                            Programming Contest
                        </a>
                        <a href="{{route('event.sc')}}" class="btn btn-registeration text-capitalize">
                            Software Contest
                        </a>
                        <a href="{{route('event.ps')}}" class="btn btn-registeration text-capitalize">
                            Robotics Competition
                        </a>
                        <a href="{{route('event.gc')}}" class="btn btn-registeration text-capitalize">
                            Gaming Competition
                        </a>
                    </div>  <!-- end of .heading-content-->
                </div>
            </div> <!-- end of .heading-wrapper -->
        </div>
    </section> <!-- end of header section -->


    <!-- begin:about -->
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>About The Event
                        <small>You need to do is very simple just join us</small>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-container">
                        <div class="service-icon">
                            <a href="#"><i class="fa fa-home"></i></a>
                        </div>
                        <div class="service-content">
                            <h3>Great Venue</h3>
                            <hr class="hover-extend">
                            <p>
                               
                            </p>
                        </div>
                    </div>
                </div>
                <!-- break -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-container">
                        <div class="service-icon">
                            <a href="http://csecarnival.com/judges"><i class="fa fa-users"></i></a>
                        </div>
                        <div class="service-content">
                            <h3>Renowned Judge</h3>
                            <hr class="hover-extend">
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <!-- break -->
                {{--<div class="col-md-3 col-sm-6 col-xs-12">--}}
                    {{--<div class="service-container">--}}
                        {{--<div class="service-icon">--}}
                            {{--<a href="#"><i class="fa fa-briefcase"></i></a>--}}
                        {{--</div>--}}
                        {{--<div class="service-content">--}}
                            {{--<h3>Evening Party</h3>--}}
                            {{--<hr class="hover-extend">--}}
                            {{--<p>--}}
                                {{----}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- break -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-container">
                        <div class="service-icon">
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                        </div>
                        <div class="service-content">
                            <h3>24/7 Support</h3>
                            <hr class="hover-extend">
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end:about -->


    <!-- begin: schedule -->
    <section id="schedule" class="section dark">
        <div class="schedule-wrapper">
            <div class="container">
                <div class= "row text-center">
                    <div class="col-md-12">
                        <h2>Full Schedule will be added soon.
                            {{-- <small>Shortest way to explore what will happen on Carnival</small> --}}
                        </h2>
                    </div>
                </div>
               {{--  <section class="nav-tabs-default">
                    <!-- Parent Nav Tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#DayOne" data-toggle="tab">
                                    <div class="dayNumber">Day 1</div>
                                    <div class="date">27/11/2015</div>
                                </a>
                            </li>
                            <li>
                                <a href="#DayTwo" data-toggle="tab">
                                    <div class="dayNumber">Day 2</div>
                                    <div class="date">28/11/2015</div>
                                </a>
                            </li>
                        </ul> <!-- end of nav-tabs -->
          
                        <!-- Parent Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="DayOne">
                                <table class="text-center table table-bordered">
                                    <tr>
                                        <th>Time</th>
                                        <th>Programme Description</th>
                                    </tr>

                                    <tr>
                                        <td>08:00 AM</td>
                                        <td>Buses Leave from Sylhet city</td> 
                                    </tr>
                                    <tr>
                                        <td>09:15 AM</td>
                                        <td>Breakfast</td> 
                                    </tr>
                                    <tr>
                                        <td>09:30 AM</td>
                                        <td>Reporting, Registration, Carnival Kit Collection (except programming contest)</td> 
                                    </tr>
                                    <tr>
                                        <td>09:45 AM</td>
                                        <td>Project Showcasing Setup</td> 
                                    </tr>
                                    <tr>
                                        <td>10:00 AM</td>
                                        <td>Inauguration Ceremony</td> 
                                    </tr> 
                                    <tr>
                                        <td>11:00 AM</td>
                                        <td>Project Showcasing Start</td>
                                    </tr>
                                    <tr>
                                        <td>11:30 AM</td>
                                        <td>Gaming Contest Start</td>
                                    </tr>
                                    <tr>
                                        <td>12:00 PM</td>
                                        <td>Inter University Software Contest Start</td>
                                    </tr>
                                    <tr>
                                        <td>12:00 PM</td>
                                        <td>Seminar</td> 
                                    </tr>
                                    <tr>
                                        <td>1:00 PM</td>
                                        <td>Lunch and Prayer break</td> 
                                    </tr>
                                    <tr>
                                        <td>3:00 PM</td>
                                        <td>SUST Inter University Programming Contest Registration</td> 
                                    </tr>
                                    <tr>
                                        <td>03:30 PM</td>
                                        <td>SUST Inter University Programming Contest (Mock)</td> 
                                    </tr>
                                    <tr>
                                        <td>05:00 PM</td>
                                        <td>All Programs Pause excluding SIUSC</td> 
                                    </tr>
                                    <tr>
                                        <td>05:30 PM</td>
                                        <td>Buses leave from SUST to Sylhet City</td> 
                                    </tr>

                                </table>
                                
                                <div class="clearfix"></div>
                
                            </div> <!-- end of .tab-pane #DayOne -->
                            <div class="tab-pane fade" id="DayTwo">
                                <table class="text-center table table-bordered">
                                    <tr>
                                        <th>Time</th>
                                        <th>Programme Description</th>
                                    </tr>

                                    <tr>
                                        <td>08:00 AM</td>
                                        <td>Buses Leave from Sylhet city</td> 
                                    </tr>
                                    <tr>
                                        <td>08:30 AM</td>
                                        <td>Breakfast and Rest of the Registration</td> 
                                    </tr>
                                    <tr>
                                        <td>09:00 AM</td>
                                        <td>SUST Inter University Programming Contest</td> 
                                    </tr>
                                    <tr>
                                        <td>09:30 AM</td>
                                        <td>Project Showcasing Resume</td> 
                                    </tr>
                                    <tr>
                                        <td>10:00 AM</td>
                                        <td>Gaming Contest Resume</td> 
                                    </tr>
                                    <tr>
                                        <td>11:00 AM</td>
                                        <td>Project Showcasing Start</td> 
                                    </tr>
                                    <tr>
                                        <td>11:00 AM</td>
                                        <td>Seminar</td> 
                                    </tr>
                                    <tr>
                                        <td>11:30 AM</td>
                                        <td>Gaming Contest Start</td> 
                                    </tr>
                                    <tr>
                                        <td>12:00 PM</td>
                                        <td>Inter University Software Contest End</td> 
                                    </tr>
                                    <tr>
                                        <td>12:00 PM</td>
                                        <td>Seminar</td> 
                                    </tr>
                                    <tr>
                                        <td>1:00 PM</td>
                                        <td>Lunch and Prayer break</td> 
                                    </tr>
                                    <tr>
                                        <td>02:00 PM</td>
                                        <td>SUST Inter University Programming Contest End</td> 
                                    </tr>
                                    <tr>
                                        <td>03:30 PM</td>
                                        <td>Closing and Prize Giving Ceremony</td> 
                                    </tr>
                                    <tr>
                                        <td>05:00 PM</td>
                                        <td>Buses leave from SUST to Sylhet City</td> 
                                    </tr>

                                </table>
                            </div> <!-- end of .tab-pane #DayTwo -->
                        </div> <!-- end of tab-content of parent tab-pane -->
                    </section> <!-- end of nav-tabs-default -->
            </div> <!-- end of .container -->
        </div>
    </section> --}}
    <!--  end of #schedule  -->



</div>
</div>
</section>
</body>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop