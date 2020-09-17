<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Ferdinand Water Transport</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png"/>
  </head>
  <body>
       <div class="header">
      <a href="index.php"><img src="images\logo_header.png" width="420" height="125"></a>
      
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="trip.php">Trips <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Status
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="mytrip.php">My Trips</a>
          <a class="dropdown-item" href="mytrip.php">Update my Trip Details</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contact.php">Talk to an Executive</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop.php">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fwttv.php">Entertainment</a>
      </li> 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="contact-form">
<form method="post" class="contact-form">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">select Problem Statement</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Select Statement</option>
      <option>Regarding Ticket Booking</option>
      <option>Regarding Trip Information</option>
      <option>Regarding Payment and Refund</option>
      <option>Regarding Guide for sitemap</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Problem discription</label>
    <input name="Problem" class="form-control" id="exampleFormControlInput1"><br>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary lg">
  </div>
</form>
</div>

<div class="contact-alert">
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">We got your message!</h4>

  <?php
$servername = "sql112.epizy.com";
$username = "epiz_26744290";
$password = "GaAD6HAeRHrjO";
$dbname = "epiz_26744290_Trip_booking";

$email=$_POST['email'];
$problem=$_POST['Problem'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `contact`(`email`, `Problem`) VALUES ('$email','$problem')";

if (mysqli_query($conn, $sql)) {
  echo "We got your message and contact details. Soon we'll get back to you taking up the needy to help you out in overcoming the trouble. Our rep will contact you on mail, so keep checking out the mail for the interaction.
    Thank you for using our support portal.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</div>
</div>

<div class="social">
  <a href="#"><img src="images\facebook.png" width="60" height="60"></a>
  <a href="#"><img src="images\instagram.png" width="60" height="60"></a>
  <a href="#"><img src="images\youtube.png" width="60" height="60"></a>
  <a href="#"><img src="images\whatsapp.png" width="60" height="60"></a>
</div>
    <div class="container">
  <div class="row">
    <div class="col-sm" id="list-1">
      <ul class="list-1">
        <li><a href="#">Contact</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">SiteMap</a></li>
        <li><a href="#">Project Details</a></li>
        <li><a href="https://www.linkedin.com/in/rahul-aradhya-t-r-849b7517b/" target="_blank">Developer Details</a></li>
      </ul>
    </div>
    <div class="col-sm" id="news">
      <div class="news-1">
      <p>Subscribe to our news letter</p>
      <label>Email: <input type="text" size="40" name=""></label>
      <p>Drop your active mail ID to get our daily newsletter regarding water transport, National and International.</p>
      </div>
    </div>
    
  </div>
</div>

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

