<?php  
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
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
    $address = $_POST["addressEdit"];

  // Sql query to be executed
  $sql = "UPDATE `donator` SET `name` = '$name' , `mobile` = '$mobile' , `item` = '$item' , `address` = '$address' WHERE `donator`.`sno` = $sno";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/crud/log.php">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.html">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button type="button" >Search</button>
                </form>
            </div>
        </div>
    </nav>
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


<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Item</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql = "SELECT * FROM `donator`";
      $result = mysqli_query($conn, $sql);
      $sno = 0;
      while($row = mysqli_fetch_assoc($result)){
        $sno = $sno + 1;
        echo "<tr>
        <th scope='row'>". $sno . "</th>
        <td>". $row['Name'] . "</td>
        <td>". $row['Item'] . "</td>
        <td>". $row['Description'] . "</td>
        <td>". $row['Status'] . "</td>
        <td>". $row['reason'] . "</td>
        
      </tr>";
    } 
      ?>
      <h4 style="text-align:center">STATUS OF YOUR DONATIONS</h4>
    </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        mobile = tr.getElementsByTagName("td")[1].innerText;
        item = tr.getElementsByTagName("td")[2].innerText;
        address = tr.getElementsByTagName("td")[3].innerText;
        console.log(Name, Mobile, Item, Address);
        nameEdit.value = name;
        mobileEdit.value = mobile;
        itemEdit.value = item;
        addressEdit.value = address;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/crud/index.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>

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