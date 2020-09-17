
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

<div class="container">
<div class="row">
<div class="col-md-6">
<div class="booking-form">
  <form class="booking-form-primary" method="POST">
    <h2>Primary Details</h2>
    <label>Name:</label></br>
    <input type="text" name="name" size="20"></br>
    <label>Email:</label></br>
    <input type="email" name="email" size="20" placeholder="example@gmail.com"></br>
    <label>Address:</label></br>
    <input type="text" name="Address" row="3" size="60" placeholder="#door.No., Street name, city,..."></br>
    <label>Aadhar number</label></br>
    <input type="number" name="aadhar" size="14"></br>
    <label>Phone Number:</label></br>
    <input type="number" name="phone" size="12"></br>
    <label>Trip Code:</label></br>
    <input type="number" name="tripid" size="10" placeholder="202001/02/03/.."></br></br>
    <input type="submit" name="submit" value="Confirm Booking" button type="button" class="btn btn-primary btn-lg">    
  </form>
</div>
</div>



<div class="col-md-6">
  <div class="booking-form-secondary">
    <form class="booking-form-secondary">
      <h2>Secondary Details</h2>
       <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
       <div class="form-group">
    <label for="exampleFormControlSelect1">Date of Departure</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Select Date</option>
      <option>22/09/2020 9:30IST</option>
      <option>22/09/2020 13:00 IST</option>
      <option>23/09/2020 9:30IST</option>
      <option>23/09/2020 13:00 IST</option>
      <option>24/09/2020 9:30IST</option>
      <option>24/09/2020 13:00 IST</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Amount of Lugage you're carrying(in KG)</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Drop your feedback about the form</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload your Document's Softcopy</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-check">
    <h5>Choose your preference for service</h5>
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Food and Drinks
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Room and Accomodation
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Oversea Party and Games
  </label>
</div>
<a href="#" button type="button" class="btn btn-primary btn-lg">Confirm and Payment</button></a>
<button type="button" class="btn btn-secondary btn-lg">Reset Form</button>

    </form>
  </div>
</div>
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
        <li><a href="contact.php">Contact</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">SiteMap</a></li>
        <li><a href="#">Project Details</a></li>
        <li><a href="#">Developer Details</a></li>
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

<?php
$servername = "sql112.epizy.com";
$username = "epiz_26744290";
$password = "GaAD6HAeRHrjO";
$dbname = "epiz_26744290_Trip_booking";

    $name=$_POST['name'];
    $email=$_POST['email'];
    $addr=$_POST['Address'];
    $aadhar=$_POST['aadhar'];
    $phone=$_POST['phone'];
    $tripid=$_POST['tripid'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `book-trip`(`name`, `email`, `Address`, `aadhar`, `phone`, `tripid`) VALUES ('$name','$email','$addr','$aadhar','$phone','$tripid')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>