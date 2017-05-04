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
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/events_banner.jpg')}}');">
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
                        <h2>Honorable Problem Setters and Judges</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                       {{-- <h3 align=center>For SUST Inter University Programming Contest</h3> --}}
                       <h3 align=center>=========================</h3>

                        <table class="text-center table table-bordered">
                            {{-- <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Company</th>
                                <th>Role</th>
                            </tr>

                            <tr>
                                <td>Towhidul Islam</td>
                                <td>Software Engineer
</td>
                                <td>IMO,USA
</td>
                                <td>Problem Setter and Judge
</td> 
                            </tr> --}}
                            {{-- <tr>
                                <td>Syed Shahriar Manjur (Dip)
</td>
                                <td>Lecturer
</td>
                                <td>CSE,SUST
</td>
                                <td>Problemset Co-ordinator
</td> 
                            </tr>
                            <tr>
                                <td>Forhad Ahmed
</td>
                                <td>Software Engineer
</td>
                                <td>Tiger IT Bangladesh Limited
</td>
                                <td>Problem Setter and Judge
</td> 
                            </tr>
                            <tr>
                                <td>Muhammad Masud Rashid
</td>
                                <td>Software Engineer
</td>
                                <td>Bizmotion Limited
</td>
                                <td>Problem Setter and Judge
</td> 
                            </tr>
                            <tr>
                                <td>Baker Mohammad Anas
</td>
                                <td>Software Engineer
</td>
                                <td>Widespace Bangladesh Limited
</td>
                                <td>Judge
</td> 
                            </tr>
                            <tr>
                                <td>Md. Maksud Hossain
</td>
                                <td>Software Analyst
</td>
                                <td>IPvision Canada Inc.
</td>
                                <td>Problem Setter and Judge
</td> 
                            </tr>
                            <tr>
                                <td>Nafis Ahmed
</td>
                                <td>Software Engineer
</td>
                                <td>Tiger IT Bangladesh Limited
</td>
                                <td>Problem Setter and Judge
</td> 
                            </tr>
                            <tr>
                                <td>Imtiaz Shakil Siddique
</td>
                                <td>Team Leader, Search Engine Team
</td>
                                <td>Chorki</td>
                                <td>Problem Setter and Judge
</td> 
                            </tr>
                            <tr>
                                <td>Tasnim Imran Sunny
</td>
                                <td>Software Engineer
</td>
                                <td>Youtube, Google
</td>
                                <td>Problem Setter
</td> 
                            </tr>
                            <tr>
                                <td>Zobayer Hasan
</td>
                                <td>Software Engineer
</td>
                                <td>Tiger IT Bangladesh Limited
</td>
                                <td>Problem Setter and Judge
</td> 
                            </tr>
                            <tr>
                                <td>Muhammad Ridowan
</td>
                                <td>Software Engineer
</td>
                                <td>Tiger IT Bangladesh Limited
</td>
                                <td>Problem Setter and Judge
</td> 
                            </tr>
                            <tr>
                                <td>Mohammad Sazzadul Hoque
</td>
                                <td>Software Analyst
</td>
                                <td>IPvision Canada Inc.
</td>
                                <td>Problem Setter and Judge
</td> 
                            </tr>
                            <tr>
                                <td>Mohammad Mahmudur Rahman
</td>
                                <td>CEO
</td>
                                <td>CodeMarshal
</td>
                                <td>CodeMarshal Coordinator
</td> 
                            </tr>
                            <tr>
                                <td>Mahafuzur Rahman
</td>
                                <td>CTO
</td>
                                <td>CodeMarshal
</td>
                                <td>CodeMarshal Coordinator
</td> 
                            </tr>
                            <tr>
                                <td>Hasnain Heickal 
</td>
                                <td>Lecturer
</td>
                                <td>CSE DU
</td>
                                <td>CodeMarshal Coordinator
</td> 
                            </tr> --}}
                            

                        </table>
                    </div>
                </div>
            </div>
        </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop