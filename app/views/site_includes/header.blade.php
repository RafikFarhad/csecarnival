<head>

    <title>{{$title}}</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="description" content="Organized By CSE Society, Department of CSE, SUST, Sylhet" />

    <meta property="og:title" content="{{$title}}" />
    <meta property="og:url" content="http://csecarnival.com" />
    <meta property="og:description" content="Organized By CSE Society, Department of CSE, SUST, Sylhet" />
    <meta property="article:author" content="CSE Society, SUST" />
    <meta property="article:publisher" content="Department of CSE, SUST" />

    <link rel="image_src" type="image/jpeg" href="http://scdnlab.com/fb_share.png" />
    <link rel="shortcut icon" href="favicon.ico" />
    <meta property="og:image" content="http://scdnlab.com/fb_share.png"/>
    <meta property="og:image:secure_url" content="http://scdnlab.com/fb_share.png" />

    <!-- stylesheets -->

    {{ HTML::style('carnival_assets/css/bootstrap.min.css') }}
    {{ HTML::style('carnival_assets/css/font-awesome.min.css') }}
    {{ HTML::style('carnival_assets/css/owl.carousel.css') }}
    {{ HTML::style('carnival_assets/css/owl.theme.css') }}
    {{ HTML::style('carnival_assets/css/jquery.fancybox.min.css') }}
    {{ HTML::style('carnival_assets/css/style.css') }}
    @yield('style')

    <!-- scripts -->
    {{ HTML::script('https://maps.googleapis.com/maps/api/js') }}

    @yield('script')
</head>