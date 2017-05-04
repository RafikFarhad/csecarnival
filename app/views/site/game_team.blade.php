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
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/gc_banner.jpg')}}');">
        <div class="header-wrapper" >
                <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Teams</a></li>
                            <li class="active">Gaming Contest Parcipants</li>
                        </ol> 

                    </div>
                </div>
            </div> --> <!-- /.container -->
        </div> <!-- /.header-wrapper -->
    </header> <!-- /.page-head (header end) -->


    <section class="main-content">
        <div class="container">
            <!--
            <div class="alert alert-info col-md-6 col-lg-offset-3" >
                <h4 align="center">For Counter Strike Team List <a href="{{route('team.gc.cs')}}">Click here</a></h4>
            </div>
            -->
            <div class="row">
                <div class="col-md-12">
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Serial</th>
                            <th>Participant Photo</th>
                            <th>Participant Name</th>
                            <th>Game</th>
                            <th>Status</th>
                        </tr>
                        <?php $count=1; ?>
                        @foreach($teams as $team)
                        <tr>
                            <td>{{$count}}</td>
                            <td><img src="{{asset("uploads/registration/$team->member_photo")}}" class="img-thumbnail img-responsive" style="width: 80px; height: 80px;"></td>
                            <td>{{$team->member_name}}</td>
                            <td>{{$team->contest}}</td>
                            @if($team->status == 0)
                            <td style="color:red">Pending</td>
                            @elseif($team->status == 1)
                            <td style="color:red">Waiting for Payment</td>
                            @elseif($team->status == 2)
                            <td style="color:green">Accepted</td>
                            @elseif($team->status == 3)
                            <td style="color:blue">Under Review</td>
                            @elseif($team->status == 4)
                            <td style="color:red">Cancel</td>
                            @endif
                        </tr>
                        <?php $count++; ?>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
    
    <!-- <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Not selected yet</h2>
                </div>
            </div>
        </div>
    </section> -->
    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop