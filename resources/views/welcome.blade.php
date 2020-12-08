<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Arrabelle Luxury Apartments</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome stylesheets -->
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}"/>


    <link href="images/logo/logo (brand5).png" type="images/x-icon" rel="shortcut icon">
    <!-- Place favicon.ico in the root directory -->

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css') }} ">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ url('css/core.css') }} ">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ url('css/shortcode/shortcodes.css') }} ">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ url('css/style.css') }} ">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }} ">
    <!-- customizer style css -->
    <link rel="stylesheet" href="{{ url('css/style-customizer.css') }} ">
    <link href="#" data-style="styles" rel="stylesheet">



    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Pre Loader
	============================================ -->
	<div class="preloader">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object object_one"></div>
				<div class="object object_two"></div>
				<div class="object object_three"></div>
			</div>
		</div>
	</div>

    <div class="wrapper">
        <!--Header section start-->
        <div class="header-section" style="background-image:url('images/bg/wave-welc-sec.jpg')">
            <div class="bg-opacity"></div>
            <div class="top-header sticky-header">
                <div class="top-header-inner">
                    <div class="container">
                        <div class="mgea-full-width">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="logo mt-15">
                                        <a href="{{ route('welcome') }}"><img src="images/logo/logo-a.png" alt="logo" style="height:65px"></a>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10 hidden-xs">
                                  <div class="header-top ptb-10">
                                      <div class="adresses">
                                          <div class="phone">
                                              <p>Call on: <span>+012 345 678 102 </span></p>
                                          </div>
                                          <div class="email">
                                              <p>Email: <span>info@arrabelle.com</span></p>
                                          </div>
                                      </div>
                                      <div class="social-links">
                                          <a href="https://github.com/BishaSD/Arrabelle.git"><i class="fa fa-github"style='font-size:20px'></i></a>
                                          <a href="#"><i class='fab fa-youtube'style='font-size:20px'></i></a>
                                          <a href="#"><i class='fab fa-redhat'style='font-size:20px'></i></a>
                                          <a href="https://laravel.com/docs/8.x"><i class='fab fa-laravel' style='font-size:20px'></i></a>
                                          <a href="#"><i class="fa fa-instagram" style="font-size:20px"></i></a>
                                          <a href="#"><i class='fa fa-facebook-f'style='font-size:20px'></i></a>
                                          <a href="#"><i class="fa fa-linkedin" style="font-size:20px"></i></a>
                                      </div>
                                  </div>
                                      <div class="menu mt-25">
                                        <div class="menu-list hidden-sm hidden-xs">
                                            <nav>
                                                <ul>
                                                    <li><a href="{{ route('welcome') }}">home</a></li>
                                                    <li><a href="{{ route('about') }}">About</a></li>
                                                    <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="#">pages<i class="fa fa-angle-down"></i></a>
                                                        <ul class="dropdown_menu">
                                                            <li><a href="404.html">404</a></li>
															<li><a href="booking-information.html">Booking Information</a></li>
															<li><a href="personal-information.html">Personal Information</a></li>
															<li><a href="payment-information.html">Parment Information</a></li>
															<li><a href="booking-done.html">Booking Done</a></li>
															<li><a href="room-booking.html">Room booking</a></li>
															<li><a href="news.html">News</a></li>
															<li><a href="gallery.html">Gallery</a></li>
															 <li><a href="staff.html">Staff</a></li>
															<li><a href="our-room.html">Room</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact-us.html">Contact</a></li>
                                                    <!-- Laravel auto-generated auth links -->
                                                    @if (Route::has('login'))
                                                            @auth
                                                              <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">User Dashboard</a></li>
                                                            @else
                                                              <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>

                                                                @if (Route::has('register'))
                                                                  <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                                                @endif
                                                            @endauth
                                                    @endif
                                                    <!-- End of Laravel auto-generated auth links -->
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="search-bar-icon">
                                           <a class="search-open" href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Mobile menu start -->
                <div class="mobile-menu-area hidden-lg hidden-md">
                    <div class="container">
                        <div class="col-md-12">
                            <nav id="dropdown">
                            <ul>
                                <li><a href="{{ route('welcome') }}">home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="booking-information.html">Booking Information</a></li>
                                        <li><a href="personal-information.html">Personal Information</a></li>
                                        <li><a href="payment-information.html">Parment Information</a></li>
                                        <li><a href="booking-done.html">Booking Done</a></li>
                                        <li><a href="room-booking.html">Room booking</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="staff.html">Staff</a></li>
                                        <li><a href="our-room.html">Room</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">contact</a></li>
                                <!-- Laravel auto-generated auth links -->
                                @if (Route::has('login'))
                                        @auth
                                          <li><a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">User Dashboard</a></li>
                                        @else
                                          <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>

                                            @if (Route::has('register'))
                                              <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                            @endif
                                        @endauth
                                @endif
                                <!-- End of Laravel auto-generated auth links -->
                            </ul>
                        </nav>
                        </div>
                    </div>
                </div>
                <!-- Mobile menu end -->
            </div>
            <!--Welcome section-->
            <div class="welcome-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="booking-box">
                                <div class="booking-title">
                                    <h3>Book Uniques places To Stay</h3>
                                    <p style="margin-bottom:9px;">Search for an apartment.</p>
                                </div>
                                <div class="booking-form">
                                  <!-- Form Start -->
                                    <form action="{{ route('apartment') }}" method="POST">
                                      <!-- Security Token -->
                                      @csrf
                                      <!-- Error Message -->
                                      <span style="color:red">@error('region'){{$message}}@enderror</span><br>
                                      <!-- Form Field -->
                                      <label for="region" style="color:black"><strong>Region</strong></label>
                                      <input type="text" name="region" placeholder="Enter a Region" style="color:white; margin-bottom:12px; background: rgba(83, 152, 178, 0.5);border-color: transparent;">

                                      <label for="check-in" style="color:black"><strong>Check In</strong></label>
                                      <input type="date" name="check-in" placeholder="Check In" style="color:white; margin-bottom:12px; background: rgba(83, 152, 178, 0.5);border-color: transparent;">

                                      <label for="check-out" style="color:black"><strong>Check Out</strong></label>
                                      <input type="date" name="check-out" placeholder="Check Out" style="color:white; margin-bottom:12px; background: rgba(83, 152, 178, 0.5);border-color: transparent;">

                                      <!-- Error Message -->
                                      <span style="color:red">@error('guest'){{$message}}@enderror</span><br>
                                      <!-- Form Field -->
                                      <label for="guest" style="color:black"><strong>Guests</strong></label>
                                      <input type="text" name="guest" placeholder="Enter 1 or More Guests" style="color:white; margin-bottom:12px; background: rgba(83, 152, 178, 0.5);border-color: transparent;">

                                      <!-- Error Message -->
                                      <span style="color:red">@error('room'){{$message}}@enderror</span><br>
                                      <!-- Form Field -->
                                      <label for="rooms" style="color:black"><strong>Rooms</strong></label>
                                      <input type="text" name="room" placeholder="Enter 1 or More Rooms" style="color:white; margin-bottom:12px; background: rgba(83, 152, 178, 0.5);border-color: transparent;">

                                      <div class="submit-form">
                                        <button type="submit">Check Availability</button>
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <div class="welcome-text">
                                <h2>
                                <span>WELCOME TO</span> <br> <span class="coloring" style="color:#d7b56d">Arrabelle Luxury Apartments</span>
                                </h2>
                                <h1 class="cd-headline clip">
                                    <span>THE PERFECT</span>
                                    <span class="cd-words-wrapper coloring">
                                        <b class="is-visible"> LOCATION</b>
                                        <b>Room</b>
                                        <b>places</b>
                                    </span>
                                </h1>
                                <p class="welcome-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                <div class="explore">
                                    <a href="#our-gallery">EXPLORE IT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header section end -->
        <!-- searchbar Start -->
            <div class="search-bar animated slideOutUp">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="search-form-wrap">
                                        <button class="close-search"><i class="fa fa-close" style="font-size:24px"></i></button>
                                        <form action="#">
                                            <input type="text" placeholder="Search here..." value="Search here..."/>
                                            <button class="search-button" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- search bar End -->
        <!--About Section Title start-->
        <div class="about-section text-center ptb-80" style="background-image:url('images/customizer/pattern/moroccan-flower.png')">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>About <span>Arrabelle Luxury Appartments</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="about-chondo">
                            <div class="about-member">
                                <img src="images/bg/img (1).png" alt="about-section">
                                <h3>Mohin patwary</h3>
                                <h5 class="mb-0">hrd head</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--About Section end-->
        <!--Our Room start-->
        <div class="our-room text-center ptb-80 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-75">
                            <h2>Our <span>Room</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                </div>
                <div class="our-room-show">
                    <div class="row">
                        <div class="carousel-list">
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img src="images/room/room1.jpg" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#">Delux room</a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h5>€ 200 / <span>Night</span></h5>
                                        </div>
                                        <div class="room-book">
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img src="images/room/room2.jpg" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#">Delux room</a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h5>€ 200 / <span>Night</span></h5>
                                        </div>
                                        <div class="room-book">
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img src="images/room/room3.jpg" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#">Delux room</a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h5>€ 200 / <span>Night</span></h5>
                                        </div>
                                        <div class="room-book">
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img src="images/room/room1.jpg" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#">Delux room</a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h5>€ 200 / <span>Night</span></h5>
                                        </div>
                                        <div class="room-book">
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img src="images/room/room2.jpg" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#">Delux room</a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h5>€ 200 / <span>Night</span></h5>
                                        </div>
                                        <div class="room-book">
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img src="images/room/room3.jpg" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#">Delux room</a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h5>€ 200 / <span>Night</span></h5>
                                        </div>
                                        <div class="room-book">
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img src="images/room/room1.jpg" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#">Delux room</a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h5>€ 200 / <span>Night</span></h5>
                                        </div>
                                        <div class="room-book">
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img src="images/room/room2.jpg" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#">Delux room</a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h5>€ 200 / <span>Night</span></h5>
                                        </div>
                                        <div class="room-book">
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-room">
                                    <div class="room-img">
                                        <a href="#"><img src="images/room/room3.jpg" alt=""></a>
                                    </div>
                                    <div class="room-desc">
                                        <div class="room-name">
                                            <h3><a href="#">Delux room</a></h3>
                                        </div>
                                        <div class="room-rent">
                                            <h5>€ 200 / <span>Night</span></h5>
                                        </div>
                                        <div class="room-book">
                                            <a href="#">Book now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Our room end-->
        <!--Our services start-->
        <div class="our-sevices text-center ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>our <span>services</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-services-list">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-services">
                                <div class="services-img">
                                    <img src="images/services/services1.jpg" alt="">
                                    <div class="services-title">
                                        <h2>Breakfast & Buffet</h2>
                                    </div>
                                    <div class="services-hover-desc">
                                        <div class="services-hover-inner">
                                            <div class="services-hover-table">
                                                <div class="services-hover-table-cell">
                                                    <h2>Breakfast & Buffet</h2>
                                                    <p>There are many variations of passages Loem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-services">
                                <div class="services-img">
                                    <img src="images/services/services2.jpg" alt="">
                                    <div class="services-title">
                                        <h2>Towels and bedding</h2>
                                    </div>
                                    <div class="services-hover-desc">
                                        <div class="services-hover-inner">
                                            <div class="services-hover-table">
                                                <div class="services-hover-table-cell">
                                                    <h2>Breakfast & Buffet</h2>
                                                    <p>There are many variations of passages Loem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-services">
                                <div class="services-img">
                                    <img src="images/services/services3.jpg" alt="">
                                    <div class="services-title">
                                        <h2>24/7 Reception</h2>
                                    </div>
                                    <div class="services-hover-desc">
                                        <div class="services-hover-inner">
                                            <div class="services-hover-table">
                                                <div class="services-hover-table-cell">
                                                    <h2>24/7 Reception</h2>
                                                    <p>There are many variations of passages Loem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-services">
                                <div class="services-img">
                                    <img src="images/services/services4.jpg" alt="">
                                    <div class="services-title">
                                        <h2>City Tours</h2>
                                    </div>
                                    <div class="services-hover-desc">
                                        <div class="services-hover-inner">
                                            <div class="services-hover-table">
                                                <div class="services-hover-table-cell">
                                                    <h2>City Tourst</h2>
                                                    <p>There are many variations of passages Loem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Our services end-->
        <!--Our staff start-->
        <div class="our-staff text-center pb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>our <span>Staff</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                </div>
                <div class="staff-list">
                    <div class="row">
                        <div class="carousel-list">
                            <div class="col-md-4">
                                <div class="single-staff">
                                    <div class="sraff-inner">
                                        <img src="images/avatar/a-jane-doe1.jpg" alt="jane-doe1">
                                        <div class="staff-title">
                                            <span class="plus"></span>
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>

                                        </div>
                                        <div class="staff-hover-desc">
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>
                                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr.</p>
                                            <div class="scoial_icons">
                                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                                <a href="#"><i class="mdi mdi-rss"></i></a>
                                                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="#"><i class="mdi mdi-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-staff">
                                    <div class="sraff-inner">
                                        <img src="images/avatar/a-jane-doe2.jpg" alt="jane-doe2">
                                        <div class="staff-title">
                                            <span class="plus"></span>
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>

                                        </div>
                                        <div class="staff-hover-desc">
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>
                                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr.</p>
                                            <div class="scoial_icons">
                                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                                <a href="#"><i class="mdi mdi-rss"></i></a>
                                                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="#"><i class="mdi mdi-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-staff">
                                    <div class="sraff-inner">
                                        <img src="images/avatar/a-john-doe1.jpg" alt="john-doe1">
                                        <div class="staff-title">
                                            <span class="plus"></span>
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>

                                        </div>
                                        <div class="staff-hover-desc">
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>
                                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr.</p>
                                            <div class="scoial_icons">
                                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                                <a href="#"><i class="mdi mdi-rss"></i></a>
                                                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="#"><i class="mdi mdi-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-staff">
                                    <div class="sraff-inner">
                                        <img src="images/avatar/a-john-doe2.jpg" alt="john-doe2">
                                        <div class="staff-title">
                                            <span class="plus"></span>
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>

                                        </div>
                                        <div class="staff-hover-desc">
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>
                                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr.</p>
                                            <div class="scoial_icons">
                                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                                <a href="#"><i class="mdi mdi-rss"></i></a>
                                                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="#"><i class="mdi mdi-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-staff">
                                    <div class="sraff-inner">
                                        <img src="images/avatar/a-john-doe3.jpg" alt="john-doe3">
                                        <div class="staff-title">
                                            <span class="plus"></span>
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>

                                        </div>
                                        <div class="staff-hover-desc">
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>
                                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr.</p>
                                            <div class="scoial_icons">
                                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                                <a href="#"><i class="mdi mdi-rss"></i></a>
                                                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="#"><i class="mdi mdi-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-staff">
                                    <div class="sraff-inner">
                                        <img src="images/avatar/a-jane-doe3.jpg" alt="jane-doe3">
                                        <div class="staff-title">
                                            <span class="plus"></span>
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>

                                        </div>
                                        <div class="staff-hover-desc">
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>
                                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr.</p>
                                            <div class="scoial_icons">
                                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                                <a href="#"><i class="mdi mdi-rss"></i></a>
                                                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="#"><i class="mdi mdi-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-staff">
                                    <div class="sraff-inner">
                                        <img src="images/avatar/a-jane-doe4.jpg" alt="jane-doe4">
                                        <div class="staff-title">
                                            <span class="plus"></span>
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>

                                        </div>
                                        <div class="staff-hover-desc">
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>
                                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr.</p>
                                            <div class="scoial_icons">
                                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                                <a href="#"><i class="mdi mdi-rss"></i></a>
                                                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="#"><i class="mdi mdi-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-staff">
                                    <div class="sraff-inner">
                                        <img src="images/avatar/a-jane-doe5.jpg" alt="jane-doe5">
                                        <div class="staff-title">
                                            <span class="plus"></span>
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>

                                        </div>
                                        <div class="staff-hover-desc">
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>
                                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr.</p>
                                            <div class="scoial_icons">
                                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                                <a href="#"><i class="mdi mdi-rss"></i></a>
                                                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="#"><i class="mdi mdi-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-staff">
                                    <div class="sraff-inner">
                                        <img src="images/avatar/a-john-doe4.jpg" alt="john-doe4">
                                        <div class="staff-title">
                                            <span class="plus"></span>
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>

                                        </div>
                                        <div class="staff-hover-desc">
                                            <h2>Soleman</h2>
                                            <h5>hotel staff</h5>
                                            <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr.</p>
                                            <div class="scoial_icons">
                                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                                <a href="#"><i class="mdi mdi-rss"></i></a>
                                                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                                <a href="#"><i class="mdi mdi-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Our staff end-->
        <!--Testimonial start-->
        <div class="staff-tesimonial text-center white_bg">
            <div class="testimonail-bg-opacity"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="testimonial-list">
                            <div class="single-testimonial">
                                <h2>Louis Smith</h2>
                               <p>There are many variations of passages of Lorem I available, but the majority have suffered alteration in som, d humour, or randomised words which
                               </p>
                            </div>
                            <div class="single-testimonial">
                                <h2>Louis Smith</h2>
                               <p>There are many variations of passages of Lorem I available, but the majority have suffered alteration in som, d humour, or randomised words which
                               </p>
                            </div>
                            <div class="single-testimonial">
                                <h2>Louis Smith</h2>
                               <p>There are many variations of passages of Lorem I available, but the majority have suffered alteration in som, d humour, or randomised words which
                               </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--Testimonial end-->
        <!--Our gallery start-->
        <div class="our-gallery text-center ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>our <span>Gallery</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-gallery-photo">
                <div class="single-gallery">
                    <img src="images/gallery/g-1.jpg" alt="">
                </div>
                <div class="single-gallery">
                    <img src="images/gallery/g-2.jpg" alt="">
                </div>
                <div class="single-gallery">
                    <img src="images/gallery/g-5.jpg" alt="">
                </div>
                <div class="single-gallery">
                    <img src="images/gallery/g-4.jpg" alt="">
                </div>
                <div class="single-gallery">
                    <img src="images/gallery/g-5.jpg" alt="">
                </div>
            </div>
        </div>
        <!--Our gallery end-->
        <!--Our news start-->
        <div class="our-news text-center white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>our <span>News</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                </div>
                <div class="news-list">
                    <div class="row">
                        <div class="col-md-12 pb-80">
                            <div class="news-inner">
                                <div class="news-img">
                                    <img src="images/news/n-1.jpg" alt="">
                                    <div class="news-post">
                                        <div class="n-date">15 June 2015</div>
                                        <a href="#" class="comment"><span><i class="mdi mdi-comment-processing-outline"></i></span> 20</a>
                                        <div class="news-views">
                                            <a href="#"><span><i class="mdi mdi-heart"></i></span>40</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-desc">
                                    <h3 class="news-title"><a href="#">Best Things to Do In London Enjoy Your life
                                      the Night life.</a> </h3>
                                    <p class="news_desc">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of tystem, and expound the actual teachings of the great explorer of the truth, the master-builder uman happiness. No one rejects, dislikes, or avoids pleasure itself, because it</p>
                                    <div class="news-action">
                                        <div class="read-more">
                                            <a href="#">Read more</a>
                                        </div>
                                        <div class="news-share">
                                            <p>Share:</p>
                                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                                            <a href="#"><i class="mdi mdi-rss"></i></a>
                                            <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                            <a href="#"><i class="mdi mdi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pb-80">
                            <div class="news-inner">
                                <div class="news-img">
                                    <img src="images/news/n-2.jpg" alt="">
                                    <div class="news-post">
                                        <div class="n-date">15 June 2015</div>
                                        <a href="#" class="comment"><span><i class="mdi mdi-comment-processing-outline"></i></span> 20</a>
                                        <div class="news-views">
                                            <a href="#"><span><i class="mdi mdi-heart"></i></span>40</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="news-desc">
                                    <h3 class="news-title"><a href="#">Best Things to Do In London Enjoy Your life
                                      the Night life. </a></h3>
                                    <p class="news_desc">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of tystem, and expound the actual teachings of the great explorer of the truth, the master-builder uman happiness. No one rejects, dislikes, or avoids pleasure itself, because it</p>
                                    <div class="news-action">
                                        <div class="read-more">
                                            <a href="#">Read more</a>
                                        </div>
                                        <div class="news-share">
                                            <p>Share:</p>
                                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                                            <a href="#"><i class="mdi mdi-rss"></i></a>
                                            <a href="#"><i class="mdi mdi-google-plus"></i></a>
                                            <a href="#"><i class="mdi mdi-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Our news end-->
        <!--Hotel communities start-->
        <div class="hotel-cmmunities ptb-100 text-center">
            <div class="community-bg-opacity"></div>
            <div class="container">
                <div class="row">
                    <div class="communities-list">
                        <div class="single-commmunites">
                            <h1 class="counter">500</h1>
                            <h2>Customers</h2>
                        </div>
                        <div class="single-commmunites">
                            <h1 class="counter">200</h1>
                            <h2>Celebrities</h2>
                        </div>
                        <div class="single-commmunites">
                            <h1 class="counter">850</h1>
                            <h2>Returns</h2>
                        </div>
                        <div class="single-commmunites hidden-xs">
                            <h1 class="counter">1250</h1>
                            <h2>Positive Reviews</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Hotel communities end-->
        <!--hotel team start-->
        <div class="hotel-team pt-100 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="team-brand pb-100">
                            <div class="single-team">
                                <a href="#"><img src="images/brand/b-1.jpg" alt=""></a>
                            </div>
                            <div class="single-team">
                                <a href="#"><img src="images/brand/b-4.jpg" alt=""></a>
                            </div>
                            <div class="single-team">
                                <a href="#"><img src="images/brand/b-3.jpg" alt=""></a>
                            </div>
                            <div class="single-team">
                                <a href="#"><img src="images/brand/b-4.jpg" alt=""></a>
                            </div>
                            <div class="single-team">
                                <a href="#"><img src="images/brand/b-5.jpg" alt=""></a>
                            </div>
                            <div class="single-team">
                                <a href="#"><img src="images/brand/b-1.jpg" alt=""></a>
                            </div>
                            <div class="single-team">
                                <a href="#"><img src="images/brand/b-4.jpg" alt=""></a>
                            </div>
                            <div class="single-team">
                                <a href="#"><img src="images/brand/b-3.jpg" alt=""></a>
                            </div>
                            <div class="single-team">
                                <a href="#"><img src="images/brand/b-4.jpg" alt=""></a>
                            </div>
                            <div class="single-team">
                                <a href="#"><img src="images/brand/b-5.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="newsletter-title">
                                        <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="newsletter-form">
                                        <form id="mc-form" class="mc-form" >
											<input id="mc-email" type="email" autocomplete="off" placeholder="Enter Address..." />
											<button id="mc-submit" type="submit">Subscribe</button>
										</form>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--hotel team end-->
        <!--Footer start -->
        <div class="footer ptb-100">
            <div class="footer-bg-opacity"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="single-footer mt-0">
                            <div class="logo">
                                <img src="images/logo/logo-a.png" alt="footer-logo" style="height:65px">
                            </div>
                            <div class="f-adress">
                                <p><span>Address:</span> ur address goes here, street Crossroad123.</p>
                            </div>
                            <div class="hotel-contact">
                                <p><span>phone:</span> 99 55 88586 5478.</p>
                                <p><span>Email:</span>info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm col-xs-6">
                        <div class="single-footer">
                           <h3>Quick Links</h3>
                           <div class="quick-item">
                                <ul>
                                   <li><a href="#">Rooms</a></li>
                                   <li><a href="#">Food & Drinks</a></li>
                                   <li><a href="#">Manifesto</a></li>
                                   <li><a href="#">Beach Venues</a></li>
                                   <li><a href="#">Wellness</a></li>
                                   <li><a href="#">Contact</a></li>
                                </ul>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="single-footer">
                            <h3>Get in touch</h3>
                            <div class="get-touch">
                                <p>There are many varins of passages of Lorem Ipsum available, but</p>
                                <div class="get-conatct">
                                    <form action="#">
                                       <input type="text" value="Your name">
                                       <input type="text" value="Your email">
                                       <button type="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="single-footer">
                            <h3>instagram</h3>
                            <div class="instagram-post">
                                <div class="single-post">
                                    <a href="#"><img src="images/instagram/ins-1.jpg" alt=""></a>
                                </div>
                                <div class="single-post">
                                    <a href="#"><img src="images/instagram/ins-2.jpg" alt=""></a>
                                </div>
                                <div class="single-post">
                                    <a href="#"><img src="images/instagram/ins-3.jpg" alt=""></a>
                                </div>
                                <div class="single-post">
                                    <a href="#"><img src="images/instagram/ins-4.jpg" alt=""></a>
                                </div>
                                <div class="single-post">
                                    <a href="#"><img src="images/instagram/ins-5.jpg" alt=""></a>
                                </div>
                                <div class="single-post">
                                    <a href="#"><img src="images/instagram/img-6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright ptb-20 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <p>Copyright© CHONDO 2018.All right reserved.Created by <a href="https://freethemescloud.com/"> Free themes Cloud</a></p>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Term of use</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer end -->
    </div>





  <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!--counter up js-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Video player js -->
    <script src="js/video-player.js"></script>
    <!-- headlines js -->
    <script src="js/animated-headlines.js"></script>
    <!-- Ajax mail js -->
    <script src="js/mailchimp.js"></script>
    <!-- Ajax mail js -->
    <script src="js/ajax-mail.js"></script>
    <!-- parallax js -->
    <script src="js/parallax.js"></script>
    <!-- textilate js -->
    <script src="js/textilate.js"></script>
    <script src="js/lettering.js"></script>
    <!--isotope js-->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/packery-mode.pkgd.min.js"></script>
    <!-- Style Customizer Js  -->
    <script src="js/style-customizer.js"></script>
    <!-- Owl carousel Js -->
    <script src="js/owl.carousel.min.js"></script>
    <!--Magnificant js-->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>
