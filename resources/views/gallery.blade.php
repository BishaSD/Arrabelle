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
        <div class="header-section about-us" style="background-image:url('images/bg/dark-waves.jpg')">
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
                                    <h2>Gallery</h2>
                                    <div class="breadcrubs-menu">
                                        <ul>
                                            <li><a href="{{ route('welcome') }}">Home<i class='fas fa-chevron-right'></i></a></li>
                                            <li>Gallery</li>
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
        <!--Gallery Title start-->
        <div class="Gallery-section text-center ptb-80 white_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-80">
                            <h2>Appar<span>tments</span></h2>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                        </div>
                    </div>
                </div>
                <div class="our-gallery-show">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-gallery-img mb-30">
                                <a href="images/gallery/item3/g-1.jpg"><img src="images/gallery/item3/g-1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-gallery-img mb-30">
                                <a href="images/gallery/item3/g-2.jpg"><img src="images/gallery/item3/g-2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-gallery-img mb-30">
                                <a href="images/gallery/item3/g-3.jpg"><img src="images/gallery/item3/g-3.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-gallery-img mb-30">
                                <a href="images/gallery/item3/g-4.jpg"><img src="images/gallery/item3/g-4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-gallery-img mb-30">
                                <a href="images/gallery/item3/g-5.jpg"><img src="images/gallery/item3/g-5.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-gallery-img mb-30">
                                <a href="images/gallery/item3/g-6.jpg"><img src="images/gallery/item3/g-6.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-gallery-img">
                                <a href="images/gallery/item3/g-7.jpg"><img src="images/gallery/item3/g-7.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-gallery-img">
                                <a href="images/gallery/item3/g-8.jpg"><img src="images/gallery/item3/g-8.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 hidden-xs">
                            <div class="single-gallery-img">
                                <a href="images/gallery/item3/g-9.jpg"><img src="images/gallery/item3/g-9.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Room Section end-->
            <!--hotel team start-->
        <div class="hotel-team white_bg">
            <div class="container">
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
