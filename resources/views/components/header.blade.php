<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    <style>
      body{
        font-family: "Raleway", sans-serif;
        color:"white";
        background-color: "black";
      }
    .topnav {
      overflow: hidden;
      background-color:transparent;
      }

    .topnav a {
      float: left;
      width:16%;
      display: block;
      color: #d7b56d;
      text-align: center;
      padding: 10px 16px;
      text-decoration: none;
      font-size: 17px;
      background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
    }

    .topnav a:hover {
      /*background-color: #ffcc95;*/
      border-bottom-style:solid;
      border-width: thin;
      border-color: #d7b56d;
      color: #d7b56d;
    }

    .topnav a.active {
      /*background-color: #ffcc95;*/
      border-bottom-style: solid;
      border-width: thin;
      border-color: #d7b56d;
      color: #d7b56d;
    }

    .topnav .icon {
      display: none;
      font-size: 14px !important;
      padding: 14px;
      color: inherit;
    }
    .topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 4px;
  font-size: 17px;
  border-color: rgb(215, 181, 109,0.2);
  border-radius: 4px;
  background-color:rgb(215, 181, 109, 0.2);
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 4px;
  margin-right: 14px;
  background: transparent;
  font-size: 17px;
  border: none;
  cursor: pointer;
  color: #d7b56d;
}

.topnav .search-container button:hover {
  /*background: #d7b56d;*/
  color: #ddd ;
}


    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {display: none;}
      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
      .topnav input[type=text] {
        border: 1px solid rgb(215, 181, 109,0.2);
      }
    }

    </style>
    </head>
    <body>

      <div class="topnav" id="myTopnav">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="{{ route('welcome') }}" style="padding: 0px 0px;">
          <img src="img/logo/logo (brand1).png" alt="logo" style="height:45px;">
        </a>

        <!-- Navbar Links
        <a href="{{ route('welcome') }}" class="active">Welcome</a>-->
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        @if (Route::has('login'))
                @auth
                  <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">UserHome</a>
                @else
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
        @endif
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search" style="width:214px">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
      </div>

    <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>

    </body>
    </html>
</div>
