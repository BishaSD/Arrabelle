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
    <!-- Start header component -->
      <x-header/>
    <!-- End of header component -->
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
                                      <input type="text" name="region" placeholder="Enter a Region" style="color:white; margin-bottom:12px; background: rgba(255, 255, 255, 0.5);border-color: transparent;">

                                      <!-- Error Message -->
                                      <span style="color:red">@error('guest'){{$message}}@enderror</span><br>
                                      <!-- Form Field -->
                                      <label for="guest" style="color:black"><strong>Guests</strong></label>
                                      <input type="text" name="guest" placeholder="Enter 1 or More Guests" style="color:white; margin-bottom:12px; background:rgba(255, 255, 255, 0.5);border-color: transparent;">

                                      <!-- Error Message -->
                                      <span style="color:red">@error('room'){{$message}}@enderror</span><br>
                                      <!-- Form Field -->
                                      <label for="rooms" style="color:black"><strong>Rooms</strong></label>
                                      <input type="text" name="room" placeholder="Enter 1 or More Rooms" style="color:white; margin-bottom:12px; background:  rgba(255, 255, 255, 0.5);border-color: transparent;">

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
        <x-searchbar/>
        <!-- searchbar End -->
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
                                <h3>Shab Sk-D.</h3>
                                <h5 class="mb-0">Project Owner</h5>
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
                            <h2>Luxury <span>Appartments</span></h2>
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
                                            <h3><a href="#">Deluxe room</a></h3>
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
        <!-- Start footer component -->
        <x-footer/>
        <!-- End of header component -->
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
