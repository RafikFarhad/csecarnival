<div id="navigation">
    <!-- main navigaion begin -->
    <nav class="yamm navbar navbar-default ">
        <div class="container">
            <!-- navbar header begin -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://csecarnival.com" style="color:white;font-size:20px">
                <span><img style="height:45px" src="http://csecarnival.com/carnival_assets/img/logo.png"></span> SUST 6th CSE Carnival 2017
                </a>
            </div>

            <!-- main navigation begin -->
            <div class="collapse navbar-collapse navHead pull-right" id="mainMenu">

                <ul class="nav navbar-nav">
                    <!-- HOME item: begin -->
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/gallery')}}">Gallery</a></li>
                    <li class="dropdown">
                        <a href="{{url('/events')}}">Events</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('event.pc')}}">Programmimg Contest</a>
                            </li>
                            <li>
                                <a href="{{route('event.sc')}}">Software Contest</a>
                            </li>
                            <li>
                                <a href="{{route('event.ps')}}">Project Showcasing</a>
                            </li>
                            <li>
                                <a href="{{route('event.rc')}}">Robotics Competition</a>
                            </li>

                            <li>
                                <a href="{{route('event.gc')}}">Gaming Competition</a>
                            </li>
                            <li>
                                <a href="{{URL('seminar')}}">Seminar</a>
                            </li>
                        </ul>  <!-- end of /.dropdown-menu -->
                    </li>
                    <li>
                        <a href="{{url('/schedule')}}">Schedule</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Teams</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('team.pc')}}">Programmimg Contest Teams</a>
                            </li>
                            <li>
                                <a href="{{route('team.sc')}}">Software Contest Teams</a>
                            </li>
                            <li>
                                <a href="{{route('team.ps')}}">Project Showcasing Teams</a>
                            </li>
                            <li>
                                <a href="{{route('team.rc')}}">Robotics Competition Teams</a>
                            </li>

                            <li>
                                <a href="{{route('team.gc')}}">Gaming Competition Participant</a>
                            </li>
                        </ul>  <!-- end of /.dropdown-menu -->
                    </li>
                    {{-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Results</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('result.pc')}}">Programmimg Contest Result</a>
                            </li>
                            <li>
                                <a href="{{route('result.sc')}}">Software Contest Result</a>
                            </li>
                            <li>
                                <a href="{{route('result.ps')}}">Project Showcasing Result</a>
                            </li>
                            <li>
                                <a href="{{route('result.gc')}}">Gaming Competition Result</a>
                            </li>
                        </ul>  <!-- end of /.dropdown-menu -->
                    </li> --}}
                    <li class="dropdown registration">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Registration</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('reg.pc')}}">Programming Contest</a>
                            </li>
                            <li>
                                <a href="{{route('reg.sc')}}">Software Contest</a>
                            </li>
                            <li>
                                <a href="{{route('reg.ps')}}">Project Showcasing</a>
                            </li>
                            <li>
                                <a href="{{route('reg.rc')}}">Robotics Competition</a>
                            </li>
                            <li>
                                <a href="{{route('reg.gc')}}">Gaming Competition</a>
                            </li>
                        </ul>  <!-- end of /.dropdown-menu -->
                    </li> <!-- end of /.dropdown -->
                    <li><a href="{{url('http://csecarnival.com/sponsor')}}">Sponsors</a></li>
                    <li>
                        <a href="{{url('/contact')}}">Contact</a>
                    </li>
                    
                </ul>

            </div><!-- main navigation FINISH -->
        </div><!-- container FINISH -->
    </nav><!-- yamm navbar navbar-default FINISH -->
</div>