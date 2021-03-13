<!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Jthemes"/>
    <meta
        name="description"
        content="MedService - Medical & Medical Health Landing Page Template"
    />
    <meta
        name="keywords"
        content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical,
			Health, Healthcare, Doctor, Clinic, Care, Hospital"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- SITE TITLE -->
    <title>MedService - Medical & Medical Health Landing Page Template</title>
    <!-- FAVICON AND TOUCH ICONS  -->
    <link rel="shortcut icon" href="{{asset('assets/medService/images/favicon.ico')}}" type="image/x-icon"/>
    <link rel="icon" href="{{asset('assets/medService/images/favicon.ico')}}" type="image/x-icon"/>
    <link
        rel="apple-touch-icon"
        sizes="152x152"
        href="{{asset('assets/medService/images/apple-touch-icon-152x152.png')}}"
    />
    <link
        rel="apple-touch-icon"
        sizes="120x120"
        href="{{asset('assets/medService/images/apple-touch-icon-120x120.png')}}"
    />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="{{asset('assets/medService/images/apple-touch-icon-76x76.png')}}"
    />
    <link rel="apple-touch-icon" href="{{asset('assets/medService/images/apple-touch-icon.png')}}"/>

{{--    <!-- GOOGLE FONTS -->--}}
{{--    --}}{{--    TODO:TEST THIS--}}
{{--    <link--}}
{{--        href="{{asset('assets/medService/css.css?family=Roboto:300,400,500,700,900')}}"--}}
{{--        rel="stylesheet"--}}
{{--    />--}}
{{--    --}}{{--    TODO:TEST THIS--}}
{{--    <link--}}
{{--        href="../../../../css-1.css?family=Lato:400,700,900"--}}
{{--        rel="stylesheet"--}}
{{--    />--}}

<!-- BOOTSTRAP CSS -->
    <link href="{{asset('assets/medService/css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- FONT ICONS -->
    {{--    <link--}}
    {{--        href="../../../../releases/v5.7.2/css/all.css"--}}
    {{--        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"--}}
    {{--        rel="stylesheet"--}}
    {{--        crossorigin="anonymous"--}}
    {{--    />--}}
    <link href="{{asset('assets/medService/css/flaticon.css')}}" rel="stylesheet"/>

    <!-- PLUGINS STYLESHEET -->
    <link href="{{asset('assets/medService/css/menu.css')}}" rel="stylesheet"/>
    <link
        id="effect"
        href="{{asset('assets/medService/css/dropdown-effects/fade-down.css')}}"
        media="all"
        rel="stylesheet"
    />
    <link href="{{asset('assets/medService/css/magnific-popup.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/medService/css/owl.carousel.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/medService/css/owl.theme.default.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/medService/css/animate.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/medService/css/jquery.datetimepicker.min.css')}}" rel="stylesheet"/>

    <!-- TEMPLATE CSS -->
    <link href="{{asset('assets/medService/css/style.css')}}" rel="stylesheet"/>

    <!-- RESPONSIVE CSS -->
    <link href="{{asset('assets/medService/css/responsive.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/medService/css/medical-style.css')}}" rel="stylesheet"/>
</head>

<body>
<!-- PRELOADER SPINNER
    ============================================= -->
<div id="loader-wrapper">
    <div id="loader">
        <div class="loader-inner"></div>
    </div>
</div>

<!-- PAGE CONTENT
    ============================================= -->
<div id="page" class="page">
    <!-- HEADER
          ============================================= -->
    <header id="header" class="header">
        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <span class="smllogo"
            ><img
                    src="{{asset('assets/medService/images/logo.png')}}"
                    width="180"
                    height="40"
                    alt="mobile-logo"
                /></span>
        </div>

        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix" id="nav">
            <div class="wsmainwp clearfix">
                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                <div class="desktoplogo">
                    <a href="#hero-2"
                    ><img
                            src="{{asset('assets/medService/images/logo.png')}}"
                            width="180"
                            height="40"
                            alt="header-logo"
                        /></a>
                </div>

                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list">
                        <li class="nl-simple" aria-haspopup="true">
                            <a href="index.html">Home</a>
                        </li>

                        <li class="nl-simple" aria-haspopup="true">
                            <a href="#nav">Clinics</a>
                        </li>

                        <li class="nl-simple" aria-haspopup="true">
                            <a href="all-doctors.html">Doctors</a>
                        </li>

                        <li class="nl-simple" aria-haspopup="true">
                            <a href="#">Posts</a>
                        </li>

                        <li class="nl-simple" aria-haspopup="true">
                            <a href="terms.html">Terms & Privacy</a>
                        </li>

                        <li class="nl-simple" aria-haspopup="true">
                            <a href="contact-us.html">Contact-Us</a>
                        </li>

                        <!-- NAVIGATION MENU BUTTON -->
                        <li class="nl-simple header-btn" aria-haspopup="true">
                            <a href="appointment.html">Register Now</a>
                        </li>
                    </ul>
                </nav>
                <!-- END MAIN MENU -->
            </div>
        </div>
        <!-- END NAVIGATION MENU -->
    </header>
    <!-- END HEADER -->
