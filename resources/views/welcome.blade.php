<!DOCTYPE html>
<html>
<title>Arrabelle Luxury Apartments</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h5,h1,p {font-family: "Raleway", sans-serif, color:"white"}
body, html {height: 100%}
.bgimg {
  background-image: url('img/bg/img (3).png');
  min-height: 100%;
  background-position: center;
  background-size: cover;
  margin-top: 12px;
}
* {box-sizing: border-box;}

.form-container{
  color:#d7b56d;
  background-color: transparent;
  padding: 16px 0px 16px 6px;
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items:center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input[type=text], input[type=date] {
  vertical-align: middle;
  margin: 5px 5px 5px 0;
  padding: 10px;
  border-color: rgb(215, 181, 109,0.2);
  border: 1px;
  border-radius: 4px;
  background-color:rgb(215, 181, 109, 0.1);
  color:inherit;
}

.form-inline input[type=text]{
  width:inherit;
}

.form-inline label{
  margin-right: 2px;
}

.form-inline button {
  padding: 10px 20px;
  margin-right: 10px;
  background-color: transparent;
  border: 1px solid #d7b56d;
  border-radius: 4px;
  color: #d7b56d;
  cursor: pointer;
}

.form-inline button:hover {
  color:black;
  background-color:#d7b56d ;
  border: 1px solid #d7b56d;
}

.i{
  color:#d7b56d;
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
</head>
<body style="background-color: black;">

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <!-- Header Component -->
    <x-header/>

  <div class="w3-display-topleft w3-padding-large w3-large">
    <!-- Responsive Middle Text on Welcome Page -->
  </div>

</div>

<!-- Responsive Inline Form -->
<div class="form-container">
<form class="form-inline" action="/action_page.php">
  <label for="region"><b>Region:</b></label>
  <input type="text" placeholder="Enter Region" name="region" required >

  <label for="guest"><strong>Guest:</strong></label>
  <input type="text" placeholder="Enter 1 or more" name="guest" required>

  <label for="room"><strong>Room:</strong></label>
  <input type="text" placeholder="Enter 1 or more" name="room" required>

  <label for="date1"><strong>Check In:</strong></label>
  <input type="date" placeholder="Check In" name="date1" required>

  <label for="date2"><strong>Check Out:</strong></label>
  <input type="date" placeholder="Check Out" name="date2" required>

  <button type="submit" class="btn" name="subSearch"><i class="fa fa-search fa-fw"></i> Search</button><button type="reset" class="btn" onclick="document.getElementById('myInput').value = ''"><i class="fa fa-close fa-fw"></i> Clear</button>
</form>
</div>

<!-- Include Apartments View into Welcome View -->
<div id="apartment">
@include('apartment')
</div>

<!-- Include About View into Welcome View -->
<div id="about">
@include('about')
</div>

<!-- Include Contact View into Welcome View -->
<div id="contact">
@include('contact')
</div>

<!-- Footer Component -->
<x-footer/>

</body>
</html>
