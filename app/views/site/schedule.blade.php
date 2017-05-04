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

                <h3 class="col-md-12 text-center">Full Schedule Will Be Added Soon.</h3>
               {{--  <div class="row">
                    <div class="col-md-6 text-center">
                        <h3>Day 01 (27th November, 2015) Friday</h3>
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
                    </div>

                    <div class="col-md-6 text-center">
                        <h3>Day 02 (28th November, 2015) Saturday</h3>
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
                    </div>
                </div> --}}
            </div>
        </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop
