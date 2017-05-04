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
    <header class="page-head" style="background-image: url('{{asset('carnival_assets/img/gc_banner.jpg')}}');">
        <div class="header-wrapper" >
                <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Registration</a></li>
                            <li class="active">Gaming Competition Registration</li>
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
                <h4 align="center">For Counter Strike Registration <a href="{{route('reg.gc.cs')}}">Click here</a></h4>
            </div>
            -->
            <div class="contact-form">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        @include('site_includes.alert')
                        {{ Form::open(array('route' => 'reg.gc.store', 'files' => true)) }}
                            <div class="form-group">
                                {{ Form::text('member_name', null, array('class' => 'form-control empty iconified', 'id'  => 'member_name', 'required'  =>  'required', 'placeholder'   =>  '&#xf183;   Name')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::email('member_email', null, array('class' => 'form-control empty iconified', 'id'  => 'member_email', 'required'  =>  'required', 'placeholder'   =>  '&#xf0e0;   E-mail')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('member_mobile', null, array('class' => 'form-control empty iconified', 'id'  => 'member_mobile', 'required'  =>  'required', 'placeholder'   =>  '&#xf10b;   Mobile No.')) }}
                            </div>

                            <div class="checkbox">
                                <h4>Which game do you want to play?</h4>
                                <label>
                                    {{ Form::checkbox('contest[]', 'nfs') }}
                                    Need For Speed (Most Wanted)
                                </label>
                                <label>
                                    {{ Form::checkbox('contest[]', 'fifa') }}
                                    FIFA 15
                                </label>
                            </div>

                            <div class="form-group">
                                <button class="file-input btn btn-file" >
                                    Upload Photo
                                {{ Form::file('member_photo', array('class' => 'form-control empty','required'  =>  'required', 'id' =>  'member_photo')) }}
                                </button>
                            </div>

                            <div class="form-group">
                                <button class="file-input btn btn-file" >
                                Upload Scan Copy of Student ID
                                {{ Form::file('member_id_photo', array('class' => 'form-control empty','required'  =>  'required', 'id' =>  'member_id_photo')) }}
                                </button>
                            </div>

                            <button type="submit" id="submit" name="submit" class="btn btn-black center-block" style="margin-bottom: 70px;">Submit <i class="fa fa-paper-plane"></i></button>
                        </form> <!-- form end -->
                    </div>
                </div>
            </div> <!-- end of /.contact-form -->
        </div>
    </section>

    <!--  Necessary scripts  -->

    @include('site_includes.footer')
@stop
