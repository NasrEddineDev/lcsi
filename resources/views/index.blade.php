<!DOCTYPE html>
@php $locale = App()->currentLocale(); @endphp
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Losalamos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 09:53:23 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Laboratoire de la Communication dans les Systèmes Informatiques </title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('assets/images/ESI-Logo-BG.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400,400i,600,600i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ URL::asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>


<!-- page wrapper -->

<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader">
        <div class="boxes">
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- switcher menu -->
    {{-- <div class="switcher">
        <div class="switch_btn">
            <button><i class="fas fa-palette"></i></button>
        </div>
        <div class="switch_menu">
            <!-- color changer -->
            <div class="switcher_container">
                <ul id="styleOptions" title="switch styling">
                    <li>
                        <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                    </li>
                    <li>
                        <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- end switcher menu -->


    <!-- main header -->
    <header class="main-header style-one">
        <div class="header-top">
            <div class="auto-container">
                <div class="top-inner clearfix">
                    <ul class="info top-left pull-left">
                        <li><i class="fas fa-phone-volume"></i><a href="tel:(+213/0) 21 51 60 77">(+213/0) 21 51 60 77
                            </a></li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:lcsi@esi.dz">lcsi@esi.dz</a></li>
                        <li class="work-time"><i class="fas fa-clock"></i>{{__('Working Hours')}} - {{__('Sun')}} - {{__('Thu')}}: 8:00 - 16:30</li>
                    </ul>
                    <ul class="top-right pull-right">
                        {{-- <li class="work-time"><i class="fas fa-flug"></i>En</li> --}}

                        <li class="nav-item" style="margin-left: 6px;">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                class="nav-link">
                                <img class="flag-icon"
                                    src="{{ URL::asset('assets/images/flag/' . ($locale == 'en' ? 'united-states.png' : ($locale == 'ar' ? 'algeria.png' : 'france.png'))) }}"
                                    alt="" />
                                {{-- <span class="profile-text font-weight-medium d-none d-md-block">
                                    {{ $locale == 'en' ? 'English' : ($locale == 'ar' ? 'العربية' : 'Français') }}
                                </span> --}}
                                <i class="fa fa-angle-down edu-icon"></i>
                            </a>
                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn"
                                style="{{ $locale == 'ar' ? 'text-align:right' : '' }}">
                                <li><a href="{{ route('lang', 'ar') }}" class="nav-link">
                                        <span class="edu-icon edu-home-admin author-log-ic">
                                            <img class="flag-icon" src="{{ URL::asset('assets/images/flag/algeria.png') }}" alt="" />
                                        </span>العربية</a>
                                </li>
                                <li><a href="{{ route('lang', 'en') }}" class="nav-link">
                                        <img class="flag-icon" src="{{ URL::asset('assets/images/flag/united-states.png') }}" alt="" />
                                        <span class="edu-icon edu-user-rounded author-log-ic lang-image">
                                        </span>English</a>
                                </li>
                                <li><a href="{{ route('lang', 'fr') }}" class="nav-link">
                                        <img class="flag-icon" src="{{ URL::asset('assets/images/flag/france.png') }}" alt="" />
                                        <span class="edu-icon edu-money author-log-ic">
                                        </span>Français</a>
                                </li>
                            </ul>
                        </li>
                        <li class="social-links">
                            <ul class="clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="/l"><img src="assets/images/lcsi1-1.png"
                                    alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation scroll-nav clearfix">
                                    <li><a href="#home">{{ __('Home') }}</a></li>
                                    {{-- <li class="current dropdown"><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home Page One</a></li>
                                            <li><a href="index-2.html">Home Page Two</a></li>
                                            <li><a href="index-3.html">Home Page Three</a></li>
                                            <li><a href="index-4.html">Home Page Four</a></li>
                                            <li><a href="index-5.html">Home Page Five</a></li>
                                            <li><a href="index-rtl.html">Home RTL</a></li>
                                            <li><a href="index-onepage.html">Home OnePage</a></li>
                                            <li class="dropdown"><a href="index.html">Header Style</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One</a></li>
                                                    <li><a href="index-2.html">Header Style Two</a></li>
                                                    <li><a href="index-3.html">Header Style Three</a></li>
                                                    <li><a href="index-4.html">Header Style Four</a></li>
                                                    <li><a href="index-5.html">Header Style Five</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="dropdown"><a href="index.html">Pages</a>
                                        <ul>
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                            <li><a href="research.html">Research</a></li>
                                            <li><a href="research-details.html">Research Details</a></li>
                                            <li><a href="books.html">Our Books</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="dropdown"><a href="#">{{ __('Researchs') }}</a>
                                        <ul>
                                            <li><a href="#team">{{ __('Teams') }}</a></li>
                                            <li><a href="#professors">{{ __('Professors') }}</a></li>
                                            <li><a href="#doctors">{{ __('Doctors') }}</a></li>
                                            <li><a href="#projects">{{ __('Projects') }}</a></li>
                                            <li><a href="books">{{ __('Books') }}</a></li>
                                            <li><a href="#articles">{{ __('Articles') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">{{ __('Graduations') }}</a>
                                        <ul>
                                            <li><a href="#engineers">{{ __('Engineers') }}</a></li>
                                            <li><a href="#masters">{{ __('Masters') }}</a></li>
                                            <li><a href="#projects">{{ __('Projects') }}</a></li>
                                            <li><a href="thesis">{{ __('Thesis') }}</a></li>
                                            <li><a href="#articles">{{ __('Articles') }}</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li class="dropdown"><a href="index.html">Team</a>
                                        <ul>
                                            <li><a href="team.html">Expert Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="dropdown"><a href="index.html">Elements</a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 1</h4></li>
                                                        <li><a href="about-element-1.html">About 01</a></li>
                                                        <li><a href="about-element-2.html">About 02</a></li>
                                                        <li><a href="about-element-3.html">About 03</a></li>
                                                        <li><a href="about-element-4.html">About 04</a></li>
                                                        <li><a href="counter-element-1.html">Fun Fact 01</a></li>
                                                        <li><a href="counter-element-2.html">Fun Fact 02</a></li>
                                                        <li><a href="counter-element-3.html">Fun Fact 03</a></li>
                                                        <li><a href="counter-element-4.html">Fun Fact 04</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 2</h4></li>
                                                        <li><a href="service-element-1.html">Service 01</a></li>
                                                        <li><a href="service-element-2.html">Service 02</a></li>
                                                        <li><a href="service-element-3.html">Service 03</a></li>
                                                        <li><a href="service-element-4.html">Service 04</a></li>
                                                        <li><a href="technology-element.html">Technology</a></li>
                                                        <li><a href="skills-element-1.html">Skills 01</a></li>
                                                        <li><a href="skills-element-2.html">Skills 02</a></li>
                                                        <li><a href="appointment-element.html">Appointment Form</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 3</h4></li>
                                                        <li><a href="news-element-1.html">News 01</a></li>
                                                        <li><a href="news-element-2.html">News 02</a></li>
                                                        <li><a href="news-element-3.html">News 03</a></li>
                                                        <li><a href="news-element-4.html">News 04</a></li>
                                                        <li><a href="news-element-5.html">News 05</a></li>
                                                        <li><a href="intro-element-1.html">Intro 01</a></li>
                                                        <li><a href="intro-element-2.html">Intro 02</a></li>
                                                        <li><a href="faq-element.html">Faq's Elements</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 4</h4></li>
                                                        <li><a href="team-element-1.html">Team 01</a></li>
                                                        <li><a href="team-element-2.html">Team 02</a></li>
                                                        <li><a href="working-element-1.html">Working Process 01</a></li>
                                                        <li><a href="working-element-2.html">Working Process 02</a></li>
                                                        <li><a href="project-element-1.html">Case Studies 01</a></li>
                                                        <li><a href="project-element-2.html">Case Studies 02</a></li>
                                                        <li><a href="project-element-3.html">Case Studies 03</a></li>
                                                        <li><a href="testimonial-element.html">Testimonial</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                    {{-- <li class="dropdown"><a href="index.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Latest News</a></li>
                                            <li><a href="blog-details.html">News Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="#news">{{ __('News') }}</a></li>
                                    <li><a href="#contact">{{ __('Contact Us') }}</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="btn-box"><a href="index.html" class="theme-btn style-one">{{ __('Join Research') }}</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index.html"><img src="assets/images/lcsi1-1.png"
                                    alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <div class="btn-box"><a href="index.html" class="theme-btn style-one">{{ __('Join Research') }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/-1.png" alt=""
                        title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-8.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>Welcome To LCSI</h5>
                        <h1>Robotics & Artificial Intelligence</h1>
                        <div class="btn-box">
                            <a href="service.html" class="theme-btn style-two">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-5.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>Productions </h5>
                        <h1>Articles & Books</h1>
                        <div class="btn-box">
                            <a href="service.html" class="theme-btn style-two">Our Service</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-4.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>Welcome To LCSI</h5>
                        <h1>Serving Science & Technology</h1>
                        <div class="btn-box">
                            <a href="service.html" class="theme-btn style-two">Our Service</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-3.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5>Welcome To LCSI</h5>
                        <h1>Serving Science & Technology</h1>
                        <div class="btn-box">
                            <a href="service.html" class="theme-btn style-two">Our Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- intro-section -->
    <section class="intro-section">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <figure class="image-box"><img src="assets/images/resource/intro-1.jpg" alt=""></figure>
                <div class="inner pull-left">
                    <h3>Best Research Laboratory at ESI from 2010-2023!</h3>
                    <p>LCSI est un laboratoire de recherche dans l'ESI .</p>
                    <p>commencé en 2010 par un Arrêté ministériel n° 93 du 25 mars 2010, .</p>
                </div>
                <div class="btn-box pull-right">
                    <a href="#contact" class="theme-btn style-one">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- intro-section end -->


    <!-- about-section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_01">
                        <div class="image-box">
                            <div class="pattern-layer"
                                style="background-image: url(assets/images/shape/shape-1.png);"></div>
                            <figure class="image"><img src="assets/images/resource/book-2.jpg" alt="">
                            </figure>
                            <div class="icon-holder">
                                <div class="icon-box"><i class="flaticon-lab"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div class="content-box">
                            <div class="sec-title left">
                                <p>About Us</p>
                                <h2>We Employ The Latest Research Technology & Company</h2>
                                <span class="separator"></span>
                            </div>
                            <div class="text">
                                <p>Our scientists and engineers focus their extreme curiosity on national and global
                                    security & health related challenges. Learn more about the Laboratory’s R&D work
                                    below segment.</p>
                            </div>
                            <div class="inner-box">
                                <div class="single-item">
                                    <div class="count-box"><span>01</span></div>
                                    <div class="inner">
                                        <h3><a href="index.html">Central Forensic Science</a></h3>
                                        <p>Forensic science is a discipline that applies scientific analysis to the
                                            justice system, help prove the events of crime</p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="count-box"><span>02</span></div>
                                    <div class="inner">
                                        <h3><a href="index.html">Clinical & Medical Laboratory</a></h3>
                                        <p>Conducts lab tests ordered by doctors. Working with laboratory machines as we
                                            examine human tissue samples & diagnose</p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="count-box"><span>03</span></div>
                                    <div class="inner">
                                        <h3><a href="index.html">Analytical & Quality Laboratory</a></h3>
                                        <p>The Various techniques that we are used to identifying the chemical makeup
                                            and characteristics of a particular samples</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- skills-section -->
    <section class="skills-section centred">
        <div class="auto-container">
            <div class="title-box">
                <div class="sec-title">
                    <p>Priority Delivered</p>
                    <h2>We Have Great Facts</h2>
                    <span class="separator"></span>
                </div>
                <div class="text">
                    <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled
                        <br />and demoralized by the pleasure of the desire that they cannot foresee.</p>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="10">0</span>
                        </div>
                        <p>{{ __('Professors') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="50">0</span>
                        </div>
                        <p>{{ __('Doctors and Phd Students') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="150">0</span>+
                        </div>
                        <p>{{ __('Engineers and Masters') }}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="440">0</span>
                        </div>
                        <p>{{ __('Projects') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skills-section end -->


    <!-- team-section -->
    <section class="service-section bg-color-1 centred" id='team'>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="sec-title">
                <p>How We are organized</p>
                <h2>Explore Our Main Teams</h2>
                <span class="separator"></span>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-details.html"><img
                                        src="assets/images/team/team-1.webp" alt=""></a></figure>
                            <div class="lower-content">
                                <h3><a href="service-details.html">Distribution Dynamique de Données</a></h3>
                                <p> Structures de données et de fichiers, Programmation dans toutes ses formes Bases de
                                    données, Compilation, Spécifications de programmes.</p>
                                <div class="link"><a href="service-details.html">Read More<i
                                            class="fas fa-angle-double-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-details.html"><img
                                        src="assets/images/team/team-2.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <h3><a href="service-details.html">Mathématiques Appliquées</a></h3>
                                <p>Domaine(s) d'intérêt : Étude de problèmes liés à la mécanique et à la physique
                                    (Écoulement de fluides, diffusion.....) dans des milieux poreux et composites. Data
                                    mining et Machine learning. Processus aléatoires. Traitement d'images.</p>
                                <div class="link"><a href="service-details.html">Read More<i
                                            class="fas fa-angle-double-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-details.html"><img
                                        src="assets/images/team/team-3.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <h3><a href="service-details.html">Bases de Données Avancées</a></h3>
                                <p>Domaine(s) d'intérêt : Bases de données, Algorithmique, Paradigmes de programmations,
                                    Structures de données et de fichiers.</p>
                                <div class="link"><a href="service-details.html">Read More<i
                                            class="fas fa-angle-double-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><a href="service-details.html"><img
                                        src="assets/images/team/team-4.jpg" alt=""></a></figure>
                            <div class="lower-content">
                                <h3><a href="service-details.html">Processus Intelligents</a></h3>
                                <p>Domaine(s) d'intérêt : Intelligence Artificielle. Robotique & Perception.</p>
                                <div class="link"><a href="service-details.html">Read More<i
                                            class="fas fa-angle-double-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-btn"><a href="service.html" class="theme-btn style-one">All Teams</a></div>
        </div>
    </section>
    <!-- service-section end -->

    <!-- professor-section -->
    <section class="team-section team-page-section" id='professors'>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/professors/professor-5.png"
                                        alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="link"><a href="team-details.html"><i class="fas fa-link"></i></a></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="team-details.html">Djamel-Eddine ZEGOUR</a></h3>
                                <span class="designation">Laboratory Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/professors/professor-5.png"
                                        alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="link"><a href="team-details.html"><i class="fas fa-link"></i></a></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="team-details.html">Hamid HADDADOU</a></h3>
                                <span class="designation">Team Leader</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/professors/professor-5.png"
                                        alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="link"><a href="team-details.html"><i class="fas fa-link"></i></a></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="team-details.html">Walid-Khaled HIDOUCI</a></h3>
                                <span class="designation">Team Leader</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                    <div class="team-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/professors/professor-5.png"
                                        alt=""></figure>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="link"><a href="team-details.html"><i class="fas fa-link"></i></a></div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="team-details.html">Mohamed LOUDINI</a></h3>
                                <span class="designation">Team Leader</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- professor-section end -->

    <!-- technology-section -->
    <section class="technology-section">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
        <div class="auto-container">
            <div class="row clearfix align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div id="video_block_01">
                        <div class="video-inner" style="background-image: url(assets/images/background/video-3.jpg);">
                            <a href="https://www.youtube.com/watch?v=K-Bnn25OCJU" class="lightbox-image"
                                data-caption=""><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_02">
                        <div class="content-box">
                            <div class="sec-title left">
                                <p>A GREAT TECHNOLOGY</p>
                                <h2>We Are The Trusted Experts Latest Laboratory Technology</h2>
                                <span class="separator"></span>
                            </div>
                            <div class="text">
                                <p>Paramedical healthcare field attracts to save lives & helping people, being a doctor
                                    is not your only choice. We how else you can help patients without being a doctor,
                                    here we serving awesome opportunity.</p>
                            </div>
                            <ul class="list-item clearfix">
                                <li><i class="flaticon-laboratory"></i>
                                    <h5>Corticosterone EIA</h5>
                                </li>
                                <li><i class="flaticon-laboratory"></i>
                                    <h5>Sample Preparation</h5>
                                </li>
                                <li><i class="flaticon-laboratory"></i>
                                    <h5>Environmental Testing</h5>
                                </li>
                                <li><i class="flaticon-laboratory"></i>
                                    <h5>Anatomical Pathology</h5>
                                </li>
                                <li><i class="flaticon-laboratory"></i>
                                    <h5>Advanced Microscopy</h5>
                                </li>
                            </ul>
                            <div class="bold-text">
                                <p>Don’t hesitate, contact us for better help and services.</p>
                            </div>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn style-one">Explore all Technology</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- technology-section end -->


    <!-- experience-section -->
    <section class="experience-section" style="background-image: url(assets/images/background/experience-1.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_03">
                        <div class="content-box">
                            <div class="sec-title left light">
                                <p>Experience</p>
                                <h2>Lab Trusted Experts</h2>
                                <span class="separator"></span>
                            </div>
                            <div class="text">
                                <p>We know how to bring the security you need. With an experience in a wide range of
                                    fields and devices.</p>
                            </div>
                            <div class="progress-content">
                                <div class="progress-box">
                                    <h5>Sample Preparation</h5>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="68%"></div>
                                        <span class="count-text">68%</span>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Environmental Testing</h5>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="80%"></div>
                                        <span class="count-text">80%</span>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Advanced Microscopy</h5>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="61%"></div>
                                        <span class="count-text">61%</span>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Medical Reserch</h5>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="70%"></div>
                                        <span class="count-text">70%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div id="content_block_04">
                        <div class="form-inner">
                            <div class="sec-title left">
                                <p>Online Appoinment</p>
                                <h2>Make An Appointment</h2>
                                <span class="separator"></span>
                            </div>
                            <form action="http://azim.commonsupport.com/Losalamos/index.html"
                                class="appointment-form">
                                <div class="form-group">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <i class="fas fa-file-alt"></i>
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Tell us about Pasent"></textarea>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="submit" class="theme-btn style-one">Submit Query</button>
                                </div>
                                <div class="form-group">
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control material-checkbox">
                                            <input type="checkbox" class="material-control-input">
                                            <span class="material-control-indicator"></span>
                                            <span class="description">I agree that my submitted data is being collected
                                                and stored.</span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- experience-section end -->


    <!-- testimonial-section -->
    <section class="testimonial-section centred">
        <div class="auto-container">
            <div class="sec-title">
                <p>Testimonial</p>
                <h2>What Our Patient Say</h2>
                <span class="separator"></span>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme owl-nav-none">
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);">
                        </div>
                        <figure class="image-box"><img src="assets/images/resource/testimonial-3.png" alt="">
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <div class="icon-box"><i class="flaticon-right-quotation-mark"></i></div>
                        <h3>Thomas Lee</h3>
                        <span class="designation">Media Touch</span>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);">
                        </div>
                        <figure class="image-box"><img src="assets/images/resource/testimonial-4.jpg" alt="">
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <div class="icon-box"><i class="flaticon-right-quotation-mark"></i></div>
                        <h3>Josan Meila</h3>
                        <span class="designation">Media Touch</span>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);">
                        </div>
                        <figure class="image-box"><img src="assets/images/resource/testimonial-1.jpg" alt="">
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <div class="icon-box"><i class="flaticon-right-quotation-mark"></i></div>
                        <h3>Thomas Lee</h3>
                        <span class="designation">Media Touch</span>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);">
                        </div>
                        <figure class="image-box"><img src="assets/images/resource/testimonial-3.png" alt="">
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <div class="icon-box"><i class="flaticon-right-quotation-mark"></i></div>
                        <h3>Josan Meila</h3>
                        <span class="designation">Media Touch</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->


    <!-- clients-section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <figure class="client-logo">
                    <a href="#"><img src="assets/images/clients/brand-1.png" alt="Awesome Image"></a>
                    <div class="overlay-box">
                        <a href="#"><img src="assets/images/clients/overlay-brand-1.png"
                                alt="Awesome Image"></a>
                    </div>
                </figure>
                <figure class="client-logo">
                    <a href="#"><img src="assets/images/clients/brand-2.png" alt="Awesome Image"></a>
                    <div class="overlay-box">
                        <a href="#"><img src="assets/images/clients/overlay-brand-2.png"
                                alt="Awesome Image"></a>
                    </div>
                </figure>
                <figure class="client-logo">
                    <a href="#"><img src="assets/images/clients/brand-3.png" alt="Awesome Image"></a>
                    <div class="overlay-box">
                        <a href="#"><img src="assets/images/clients/overlay-brand-3.png"
                                alt="Awesome Image"></a>
                    </div>
                </figure>
                <figure class="client-logo">
                    <a href="#"><img src="assets/images/clients/brand-4.png" alt="Awesome Image"></a>
                    <div class="overlay-box">
                        <a href="#"><img src="assets/images/clients/overlay-brand-4.png"
                                alt="Awesome Image"></a>
                    </div>
                </figure>
                <figure class="client-logo">
                    <a href="#"><img src="assets/images/clients/brand-5.png" alt="Awesome Image"></a>
                    <div class="overlay-box">
                        <a href="#"><img src="assets/images/clients/overlay-brand-5.png"
                                alt="Awesome Image"></a>
                    </div>
                </figure>
            </div>
        </div>
    </section>
    <!-- clients-section end -->


    <!-- news-section -->
    <section class="news-section bg-color-1" id="news">
        <div class="auto-container">
            <div class="sec-title">
                <p>OUR NEWS & BLOG</p>
                <h2>Publish What You Think</h2>
                <span class="separator"></span>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="assets/images/news/news-12.jpg" alt="">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fas fa-comments"></i><a href="blog-details.html">Comments 47</a>
                                        </li>
                                        <li><i class="far fa-calendar-alt"></i>Jan 13, 2020</li>
                                    </ul>
                                    <h3><a href="blog-details.html">Ways To Tell Youre Suffering To From An Skion</a>
                                    </h3>
                                    <p>We provide complete process piping capabilities for industrial from pulp and
                                        paper.</p>
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="link"><a href="blog-details.html">READ MORE</a></div>
                                    <div class="admin"><i class="fas fa-user"></i><a href="blog-details.html">By
                                            Admin</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="assets/images/news/news-13.png" alt="">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fas fa-comments"></i><a href="blog-details.html">Comments 42</a>
                                        </li>
                                        <li><i class="far fa-calendar-alt"></i>Jan 14, 2020</li>
                                    </ul>
                                    <h3><a href="blog-details.html">Do You Want To Fast Track your Lab Operations</a>
                                    </h3>
                                    <p>We provide complete process piping capabilities for industrial from pulp and
                                        paper.</p>
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="link"><a href="blog-details.html">READ MORE</a></div>
                                    <div class="admin"><i class="fas fa-user"></i><a href="blog-details.html">By
                                            Admin</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <div class="overlay-box-1"></div>
                                <div class="overlay-box-2"></div>
                                <img src="assets/images/news/news-14.png" alt="">
                                <a href="blog-details.html"><i class="fas fa-link"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <ul class="post-info clearfix">
                                        <li><i class="fas fa-comments"></i><a href="blog-details.html">Comments 40</a>
                                        </li>
                                        <li><i class="far fa-calendar-alt"></i>Jan 15, 2020</li>
                                    </ul>
                                    <h3><a href="blog-details.html">Learn: Blood bank operations and management</a>
                                    </h3>
                                    <p>We provide complete process piping capabilities for industrial from pulp and
                                        paper.</p>
                                </div>
                                <div class="lower-box clearfix">
                                    <div class="link"><a href="blog-details.html">READ MORE</a></div>
                                    <div class="admin"><i class="fas fa-user"></i><a href="blog-details.html">By
                                            Admin</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-text">
                <p>Don’t hesitate, contact us for better help and blog. <a href="blog.html">Explore all latest
                        News.</a></p>
            </div>
        </div>
    </section>
    <!-- news-section end -->

    <!-- contact-section -->
    <section class="contact-section" id="contact">
        <div class="auto-container">
            <div class="sec-title">
                <p>Contact Us</p>
                <h2>Publish What You Think</h2>
                <span class="separator"></span>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <div class="sec-title left">
                            <p>Drop Us Line</p>
                            <h2>We’d Love To Hear From You.</h2>
                            <span class="separator"></span>
                        </div>
                        <form method="post" action="http://azim.commonsupport.com/Losalamos/sendemail.php"
                            id="contact-form" class="contact-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn style-one" name="submit-form">Submit
                                        Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                    <div class="info-inner">
                        <div class="sec-title left">
                            <p>Contact Info</p>
                            <h2>Contact With Us </h2>
                            <span class="separator"></span>
                        </div>
                        <ul class="info-box clearfix">
                            <li>
                                <div class="icon-box"><i class="flaticon-call"></i></div>
                                <h5>Phone No.</h5>
                                <p><a href="tel:1800123456">(+213) 021 51 60 77 </a></p>
                            </li>
                            <li>
                                <div class="icon-box"><i class="flaticon-circular-clock"></i></div>
                                <h5>Opening Hours</h5>
                                <p>8:00 - 16:00 </p>
                            </li>
                            <li>
                                <div class="icon-box"><i class="flaticon-worldwide"></i></div>
                                <h5>Address</h5>
                                <p> LCSI BP 68M Oued-Smar 16309 Alger.</p>
                            </li>
                        </ul>
                        <div class="follow-box">
                            <h5>Follow Us:</h5>
                            <ul class="social-links clearfix">
                                <li><a href="contact.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="contact.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="contact.html"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="contact.html"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-text">
                <p>Don’t hesitate, contact us for better help and blog. <a href="blog.html">Explore all latest
                        News.</a></p>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="auto-container">
            <div class="map-column">
                <div class="google-map-area">
                    {{-- <div
                        class="google-map"
                        id="contact-google-map"
                        data-map-lat="40.712776"
                        data-map-lng="-74.005974"
                        data-icon-path="assets/images/icons/map-marker.png"
                        data-map-title="Brooklyn, New York, United Kingdom"
                        data-map-zoom="12"
                        data-markers='{
                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/shape/map-marker.png"]
                        }'> --}}
                    {{-- <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600" frameborder="0"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div> --}}
                    {{-- <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=52.70967533219885, -8.020019531250002&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br /> --}}
                    {{-- <iframe
                             src="https://goo.gl/maps/ypHBpMipis74Z7q97"
                            width="800" height="600" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe> --}}
                    <iframe src="https://maps.google.com/maps?q=esi algiers&t=&z=10&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    {{-- <div class="mapouter"><div class="gmap_canvas"><iframe width="770" height="510" id="gmap_canvas" src="https://maps.google.com/maps?q=esi algiers&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:510px;width:770px;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:770px;}</style></div></div> --}}

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- google-map-section end -->

    <!-- newsletter-section -->
    <section class="newsletter-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 inner-column">
                    <div class="inner-box">
                        <h2>Subscribe Newsletter</h2>
                        <p>Stay in touch with us to get latest news and discount coupons</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                    <form action="http://azim.commonsupport.com/Losalamos/index.html" method="post"
                        class="newsletter-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                            <button class="theme-btn style-two" type="submit">Subscribe Now!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-section end -->


    <!-- main-footer -->
    <section class="main-footer">
        <div class="footer-top">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img
                                            src="assets/images/footer-logo.png" alt=""></a></figure>
                                <div class="text">
                                    <p>LCSI ( Communication dans les Systèmes Informatiques ) est un laboratoire de
                                        recherche dans l'ESI ( Ecole National Supperieure d'Informatique ), commencé en
                                        2010 par un Arrêté ministériel n° 93 du 25 mars 2010. </p>
                                </div>
                                <div class="text">
                                    <p> LCSI BP 68M Oued-Smar 16309 Alger </p>
                                </div>
                                <div class="social-inner">
                                    <h3>Follow Us:</h3>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Usefull Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="clearfix">
                                        <li><a href="index.html">About Us</a></li>
                                        <li><a href="index.html">Our Services</a></li>
                                        <li><a href="index.html">Our Team</a></li>
                                        <li><a href="index.html">Contacts</a></li>
                                        <li><a href="index.html">Research</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Recent Post</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="image-box"><a href="blog-details.html"><img
                                                    src="assets/images/resource/testimonial-3.png" alt=""></a>
                                        </figure>
                                        <p><i class="fas fa-calendar-alt"></i>Feb 05, 2020</p>
                                        <h5><a href="blog-details.html">Tests with Nursing Implicat Laboratory
                                                Technician</a></h5>
                                    </div>
                                    <div class="post">
                                        <figure class="image-box"><a href="blog-details.html"><img
                                                    src="assets/images/resource/testimonial-4.jpg" alt=""></a>
                                        </figure>
                                        <p><i class="fas fa-calendar-alt"></i>Feb 06, 2020</p>
                                        <h5><a href="blog-details.html">Equipping Researchers Lab in the
                                                Developing.</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Our Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="clearfix">
                                        <li><a href="index.html">Scientific</a></li>
                                        <li><a href="index.html">Chemistry</a></li>
                                        <li><a href="index.html">Gemological</a></li>
                                        <li><a href="index.html">Forensic science</a></li>
                                        <li><a href="index.html">Immunology</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="auto-container">
                <div class="copyright">
                    <p>Copyright &copy; 2020 <a href="index.html">Losalamos</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


    <!-- jequery plugins -->
    <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.js') }}"></script>
    <script src="{{ URL::asset('assets/js/wow.js') }}"></script>
    <script src="{{ URL::asset('assets/js/validation.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ URL::asset('assets/js/appear.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ URL::asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ URL::asset('assets/js/tilt.jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pagenav.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jQuery.style.switcher.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="{{ URL::asset('assets/js/gmaps.js') }}"></script>
    <script src="{{ URL::asset('assets/js/map-helper.js') }}"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Losalamos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 09:56:25 GMT -->

</html>
