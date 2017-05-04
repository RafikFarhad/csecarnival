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
                    <h2>Seminar</h2>
                </div>

            </div>
           {{--  <div class="row">
                <div class="col-md-6 text-center">
                    <h3>Big Data & Cloud Computing</h3>
                    <h3>Day 01 (27th November, 2015) Friday @ 11:00 AM</h3>
                    <img src="https://scontent-ams3-1.xx.fbcdn.net/hphotos-xtf1/t31.0-8/12248050_1044844945567408_6081231897507225043_o.jpg" width="100%" />
                    
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Topics</th>
                        </tr>

                        <tr>
                            <td>
                                1. Big Data Paradigm</br>
                                2. noSQL is not a panacea?</br>
                                3. Cloud Appocalypse: Present & Future</br>
                                5. Cloud Storage: Enhancing ‘Openstack Swift’</br>
                                6. Hadoop 2 and Ecosystem
                            </td>
                        </tr>

                    </table>
                    
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Speaker</th>
                        </tr>

                        <tr>

                            <td>
                                1. Md Mohiuddin Mishu, IPvision Canada Inc</br>
                                2. Hasan Ibna Akbar, IPvision Canada Inc
                            </td> 
                        </tr>

                    </table>
                    <b>**Lucky 15 participant will win special T-Shirt</b>
                </div>

                <div class="col-md-6 text-center">
                    <h3>Innovation Master Class: Solve for X</h3>
                    <h3>Day 02 (28th November, 2015) Saturday @ 11:00 AM</h3>
                    <img src="https://scontent-ams3-1.xx.fbcdn.net/hphotos-xpa1/t31.0-8/11234870_1044368545615048_3516816935625849256_o.jpg" width="100%" />
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Topics</th>
                        </tr>

                        <tr>
                            <td>
                                Solve for X is a platform for scientists, inventors, engineers, artists, thinkers, doers, the young, the wise, men and women from every background across every geography connected by a shared optimism that science and technology can cause radically positive things to happen in the world.
                                This is a 3hrs long design sprint event to accelerate design thinking and problem solving abilities.
                            </td>

                        </tr>

                    </table>
                    
                    <table class="text-center table table-bordered">
                        <tr>
                            <th>Speaker</th>
                        </tr>

                        <tr>

                            <td>
                                1. Arif Nezami, Manager, Google Developer Group Dhaka(GDG)</br> 
                                2. Anam Hossain, GDG</br>
                                3. Touhidul Islam Swapon, GDG</br>
                                4. Istiaque Reza Shishir, GDG
                            </td> 
                        </tr>

                    </table>
                </div>
            </div> --}}
        </div>
    </section>


    <!--  Necessary scripts  -->

    @include('site_includes.footer')
    @stop