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
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/ps_banner.png')}}');">
        <div class="header-wrapper" >
            <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Events</a></li>
                            <li class="active">Project Showcasing</li>
                        </ol> 

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Participants</h2>
                        <ol>
                            {{-- <li>
                                Maximum <b>3</b> Members in a Group
                            </li>
                            <li>
                                Only UNIVERSITY Students can participate
                            </li> --}}
                            {{-- <li>
                                Registration should be done before the deadline (on spot registration is not allowed). 
                            </li>
                            <li>
                                All team must have to bring all necessary accessories (PC, Hardware, Backup Internet Modem) for their project with them. Only Wifi will be provided. 

                            </li>
                            <li>
                                The showcasing will be held in both two days of the Carnival. So
every team must have to be present in both 1st and 2nd day. 
                            </li> --}}
                            {{-- <li>The program committee reserves all the rights to accept or reject any additional teams after fulfilling the above-mentioned criterion.</li> --}}
                        </ol>
                    </div>
                </div>
            </section>

            {{-- <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Registration Fees</h2>
                            <p>Registration Fee <b>1200.00 BDT</b> per team(3 members).</p>
                    </div>
                </div>
            </section> --}}


            <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Important Dates</h2>

                        <table class="text-center table table-bordered " >
                            <tr>
                                <th>Date</th>
                                <th>Description</th>
                            </tr>

                            <tr>
                                <td>Wii be published soon</td>
                                {{-- <td>21 September 2015</td> --}}
                                <td>Registration Start</td> 
                            </tr>
                            <tr>
                                <td>Wii be published soon</td>
                                {{-- <td><strike>31 October 2015</strike></br>5 November 2015</td> --}}
                                <td>Registration Close</td> 
                            </tr>
                            <tr>
                                <td>Wii be published soon</td>
                                {{-- <td><strike>1 November 2015</strike></br>6 November 2015</td> --}}
                                <td>Selected Team List will be Published</td> 
                            </tr>
                            <tr>
                                <td>Wii be published soon</td>
                                {{-- <td><strike>5 November 2015</strike></br>15 November 2015</td> --}}
                                <td>Payment Deadline</td> 
                            </tr>
                            <tr>
                                <td>Wii be published soon</td>
                                {{-- <td>27-28 November 2015</td> --}}
                                <td>Project Showcasing</td> 
                            </tr>

                        </table>
                    </div>
                </div>
            </section>
            
            {{-- <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Question and Discussion</h2>
                            <a target="_blank" href="https://www.facebook.com/events/436521793199981/">Please Visit Facebook Event Page</a>
                    </div>
                </div>
            </section>
 --}}
            {{-- <section class="event-section">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Payment</h2>
                        Please send your payment as Bank Draft/Pay Order to</br>
                        Account Name: <b>CSE Event, Dept. of CSE, SUST</b></br>
                        Account No: <b>34053918</b></br>
                        <b>Sonali Bank Ltd, SUST Branch, Sylhet<b/>
                    </div>
                </div>
            </section> --}}

            <section class="quick-registration-link" align=center>
            <a href="{{route('reg.ps')}}" class="btn btn-black">Register Now</a>
            </section>
            
        </div>
    </section>

    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop
