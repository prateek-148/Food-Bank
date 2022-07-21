<?php  
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
$insert = false;
$update = false;
$delete = false;
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "donator";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `donator` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['snoEdit'])){
  // Update the record
    $sno = $_POST["snoEdit"];
    $name = $_POST["nameEdit"];
    $mobile = $_POST["mobileEdit"];
    $item = $_POST["itemEdit"]; 
    $description = $_POST["descriptionEdit"];
    $address = $_POST["addressEdit"];
    $preference = $_POST["preferenceEdit"];
    $status = $_POST["statusEdit"];

  // Sql query to be executed
  $sql = "UPDATE `donator` SET `name` = '$name' , `mobile` = '$mobile' , `item` = '$item', `description` = $description, `address` = '$address', `preference` = '$preference' WHERE `donator`.`sno` = $sno";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}
}
else{
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $item = $_POST["item"];
    $description = $_POST["description"];
    $address = $_POST["address"];
    $preference = $_POST["preference"];

  // Sql query to be executed
  $sql = "INSERT INTO `donator` (`name`, `mobile`, `item`, `description`, `address`, `preference`) VALUES ('$name', '$mobile', '$item', '$description', '$address', '$preference')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

  </html>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">FoodBank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/crud/Food Bank/Food Bank/statest.php">Status</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/crud/Food Bank/Food Bank/query.php">Raise Query</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/crud/Food Bank/Food Bank/trackinfo.php">Track</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button type="button">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Donation has been made successfully!
    <button type='button' class='close' data-bs-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <div class="container my-4">
    <h2 style="text-align:center">Donate Us</h2>
    <form action="/crud/Food Bank/Food Bank/log.php" method="POST">
      <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="title">Mobile</label>
        <input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="emailHelp">
      </div>
      <div class="input-group mb-3 my-4">
        <select class="custom-select" id="item" name="item">
          <option selected>Food</option>
          <option value="Toys">Toys</option>
          <option value="Clothes">Clothes</option>
          <option value="Blankets">Blankets</option>
          <option value="Furniture">Furniture</option>
          <option value="Others">Others</option>
        </select>
        <div class="input-group-append">
          <label class="input-group-text" for="inputGroupSelect02">Item</label>
        </div>
      </div>
      <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="desc">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
      </div>
      <div class="input-group mb-3 my-4">
        <select class="custom-select" id="preference" name="preference">
          <option selected>Select</option>
          <option value="Pickup">Pick it up from my address</option>
          <option value="Drop">I'll come and drop</option>
        </select>
        <div class="input-group-append">
          <label class="input-group-text" for="inputGroupSelect02">Preference</label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary my-4">Donate</button>
    </form>
  </div>

  <title>Footer Bootstrap 4</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
  </head>

  <body>

    <footer class="page-footer bg-dark">

      <div class="bg-primary">
        <div class="container">
          <div class="row py-4 d-flex align-items-center">

            <div class="col-md-12 text-center">
              <a href="#"><i class="fab fa-facebook-f white-text mr-4"> </i></a>
              <a href="#"><i class="fab fa-twitter white-text mr-4"> </i></a>
              <a href="#"><i class="fab fa-google-plus-g white-text mr-4"> </i></a>
              <a href="#"><i class="fab fa-linkedin-in white-text mr-4"> </i></a>
              <a href="#"><i class="fab fa-instagram white-text"> </i></a>
            </div>

          </div>
        </div>
      </div>

      <div class="container text-center text-md-left mt-5">
        <div class="row">

          <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">The Providers</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
            <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          </div>

          <div class="col-md-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Useful links</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">
            <ul class="list-unstyled">
              <li class="my-2"><a href="#">Home</a></li>
              <li class="my-2"><a href="#">About</a></li>
              <li class="my-2"> <a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">
            <ul class="list-unstyled">
              <li class="my-2"><i class="fas fa-home mr-3"></i> Hosur,India</li>
              <li class="my-2"><i class="fas fa-envelope mr-3"></i> aslamsha@gmail.com</li>
              <li class="my-2"><i class="fas fa-phone mr-3"></i> +9199887766</li>
              <li class="my-2"><i class="fas fa-print mr-3"></i> + 01 234 567 89</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer-copyright text-center py-3">
        <p>&copy; Copyright
          <a href="#">foodbank.com</a>
        </p>
        <p>Designed by The Food Bank Team</p>
      </div>
    </footer>
    <!-- Footer -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
  </body>

</html>