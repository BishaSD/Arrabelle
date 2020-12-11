<!doctype html>
<html class="no-js" lang="">

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
        <div class="header-section about-us" style="background-image:url('images/bg/sunset-wave.jpg')">
            <div class="bg-opacity"></div>
            <!-- Start header component -->
              <x-header/>
            <!-- End of header component -->
            <!--Welcome section-->
            <div class="welcome-section text-center ptb-110">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcurbs-inner">
                                <div class="breadcrubs">
                                    <h2>About us</h2>
                                    <div class="breadcrubs-menu">
                                        <ul>
                                            <li><a href="{{ route('welcome') }}">Home<i class='fas fa-chevron-right'></i></a></li>
                                            <li>About us</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Header section end-->
        <!-- Searchbar Component Start -->
        <x-searchbar/>
        <!-- Searchbar Component End -->
        <!--About Section Title start-->
        <div class="about-section text-center ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>About <span>Arrabelle</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="about-chondo">
                            <div class="about-member">
                                <img src="images/about.jpg" alt="">
                                <h3>Shab Sk-D.</h3>
                                <h5 class="mb-0">Project Owner</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <

        <!--Hotel Exlusive offer start-->
        <div class="hotel-exclusive ptb-100 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-exclusive">
                            <h3>Exclusive</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-exclusive">
                            <h3>Complimentary</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-exclusive">
                            <h3>Earn Points</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-exclusive">
                            <h3>Join For Free</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hotel Exlusive offer end-->
        <!--Hotel feature start-->
        <div class="hotel-feature pt-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="feature-desc text-left">
                            <div class="section-title mb-30">
                                <h2>Feature <span>chondo</span></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected huor randomised words which don't look even slightly believable. If you are going to useassage of Lorem Ipsum, you need to be sure thereng en in the middle of text</p>
                            </div>
                            <div class="feature-item">
                                <ul>
                                    <li>
                                        <span>1.</span>But the majority have suffered alteration in some.
                                    </li>
                                    <li>
                                        <span>2.</span>Useassage of Lorem Ipsum, you need to be sure thereng .
                                    </li>
                                    <li>
                                        <span>3.</span>Ay injected huor randomised words which don't .
                                    </li>
                                    <li>
                                        <span>4.</span>By sage of Lorem Ipsum, you need to be sure thereng en in the.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="feature-img-tab">
                            <div class="feature-tab-desc">
                                <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="feature1">
                                <div class="feature-tab-inner">
                                    <img src="images/services/services6.jpg" alt="">
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="feature2">
                                <div class="feature-tab-inner">
                                    <img src="images/services/services7.jpg" alt="">
                                </div>
                            </div>
                        </div>
                            </div>
                            <div class="feature-tab-item">
                                <ul class="nav" role="tablist">
                                    <li class="active"><a href="#feature1" data-toggle="tab"><img src="images/services/tab-1.jpg" alt=""></a></li>
                                    <li><a href="#feature2" data-toggle="tab"><img src="images/services/tab-2.jpg" alt=""></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hotel feature end-->
        <!--Our staff start-->
        <div class="our-staff text-center ptb-80 white_bg">
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
                                        <img src="images/staff/staff1.jpg" alt="">
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
                                        <img src="images/staff/staff2.jpg" alt="">
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
                                        <img src="images/staff/staff3.jpg" alt="">
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
                                        <img src="images/staff/staff1.jpg" alt="">
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
                                        <img src="images/staff/staff2.jpg" alt="">
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
                                        <img src="images/staff/staff3.jpg" alt="">
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
                                        <img src="images/staff/staff1.jpg" alt="">
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
                                        <img src="images/staff/staff2.jpg" alt="">
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
                                        <img src="images/staff/staff3.jpg" alt="">
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
        <div class="staff-tesimonial text-center ptb-140">
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
