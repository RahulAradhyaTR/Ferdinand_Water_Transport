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
        <a class="nav-link" href="blog.php"> Blog</a>
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


<div class="update-booking">
  <form method="POST" id="form-update">
    <label>Registered Email:<input type="email" name="email" size="40"></label><br>
    <label>Change Name:<input type="text" name="newname"></label><br>
    <label>Change Address:<input type="text" name="newadd"></label><br>
    <label>Change Phone Num:<input type="number" name="newphone"></label><br>
    <label>Change Trip ID:<input type="number" name="newtrip"></label><br>
    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Update">
    <input class="btn btn-primary btn-lg btn-block" type="reset" value="Reset">
  </form>
</div>
<div class="update-customer-data">
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Update Successful!</h4>

<?php
$servername = "sql112.epizy.com";
$username = "epiz_26744290";
$password = "GaAD6HAeRHrjO";
$dbname = "epiz_26744290_Trip_booking";

$em=$_POST['email'];
    $nu=$_POST['newname'];
    $nad=$_POST['newadd'];
    $nph=$_POST['newphone'];
    $ntc=$_POST['newtrip'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `book-trip` SET `name`='$nu',`Address`='newadd',`phone`='newphone',`tripid`='newtrip' WHERE `email`='$em'";

if ($conn->query($sql) === TRUE) {
    echo "Customer Data Updated Successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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
        <li><a href="#">Developer Details</a></li>
      </ul>
    </div>
    <div class="col-sm" id="news">
      <div class="news-1">
      <p>Subscribe to our news letter</p>
      <label>Email: <input type="text" size="40" name="subs-mail"></label>
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

