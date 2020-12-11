
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Arrabelle Luxury Apartment</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Font Awesome stylesheets -->
      <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css') }}" />
      <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css') }}" />
      <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}"/>


      <link href="images/apple-touch-icon.png" type="images/x-icon" rel="shortcut icon">
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
                          <li><a href="{{ route('gallery') }}">Gallery</a></li>
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
    </body>
    </html>
