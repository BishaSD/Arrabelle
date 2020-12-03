<!DOCTYPE html>
<html>
<title>Arrabelle Luxury Apartments</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h5,h1,p {font-family: "Raleway", sans-serif, color:"white"}
body, html {height: 100%}
.bgimg {
  background-image: url('img/bg/img (3).png');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
* {box-sizing: border-box;}

.form-container{
  color:#d7b56d;
  background-color: transparent;
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  border-color: rgb(215, 181, 109,0.2);
  border-radius: 4px;
  background-color:rgb(215, 181, 109, 0.2);
}

.form-inline button {
  padding: 10px 20px;
  background-color: transparent;
  border: 1px solid #d7b56d;
  border-radius: 4px;
  color: #d7b56d;
  cursor: pointer;
}

.form-inline button:hover {
  color:#ddd;
  background-color:#d7b56d ;
  border: 1px solid #d7b56d;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
</style>
<body style="background-color: black;">

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">

  <!-- Header Component -->
  <x-header/>

  <div class="w3-display-topleft w3-padding-large w3-large">
    <!-- Responsive Middle Text on Welcome Page -->
  </div>

  <!-- Right-side container on Welcome page -->
  <div style="padding-left:8px">
  <!--  <h3>Responsive Topnav Example</h3>
    <p>Resize the browser window to see how it works.</p>-->
    </div>

  <!-- Footer Component to be added
  <div class="w3-display-bottomleft w3-padding-large">
    Footer
    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
  </div> -->

  <!-- Responsive Inline Form -->
  <div class="w3-display-bottomleft">
  <div class="form-container">
  <form class="form-inline" action="/action_page.php">
    <label for="email">Email:</label>
    <input type="email" id="email" placeholder="Enter email" name="email">
    <label for="pwd">Password:</label>
    <input type="password" id="pwd" placeholder="Enter password" name="pswd">
    <label>
      <input type="checkbox" name="remember"> Remember me
    </label>
    <button type="submit">Submit</button>
  </form>
  </div>
  </div>

</div>



<div id="about">
@include('about')
</div>

<div id="contact">
@include('contact')
</div>

<!-- Footer Component -->
<x-footer/>
</body>

</html>
