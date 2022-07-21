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

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <title>Food bank</title>

</head>

<body>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#"><img src="/crud/logo.svg" height="28px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="navbar-brand" href="#">FoodBank</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="adminlog3.php">Take Action <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="adminlog1.php">Delete <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="querytest2.php">Queries <span class="sr-only">(current)</span></a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
<?php
if(isset($_POST['approved']))
{
	$status="Approved";
	$reason=$_POST['reason'];
	$sno=$_POST['sno'];
	
	 $query="UPDATE `donator` set `Status`='$status', `reason`='$reason' where `sno`='$sno'";
	
	$res=mysqli_query($conn,$query);
	
	if($res){
		$_SESSION['success']="Row Updated successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}

}
if(isset($_POST['rejected']))
{
	$status= "Rejected";
	$reason=$_POST['reason'];
	$sno=$_POST['sno'];
	
	$query="UPDATE `donator` set `Status`='$status', `reason`='$reason' where `sno`='$sno'";
	
	$res=mysqli_query($conn,$query);
	
	if($res){
		$_SESSION['success']="Changes Made successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}
}


?>
<!------end header here --------->
<div class="container">
<h3 style="padding-top: 25px; text-align:center">LIST OF ALL DONATIONS MADE</h3>
<?php if(isset($_SESSION['success'])){
	echo $_SESSION['success'];
	unset($_SESSION['success']);
}
	?>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Sr No.</th>
      <th>Name</th>
	        <th>Mobile</th>
	   <th>Item</th>
	     <th>Description</th>
		   <th>Address</th>
       <th>Preference</th>
		    <th>Status</th>
        <th>Remarks</th>
			 <th>Reason</th>
     
			 <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $i=1;
  $query="Select * from `donator`";
	$res=mysqli_query($conn, $query);
	$count=mysqli_num_rows($res);
	if($count>0)
	{
	while($row=mysqli_fetch_array($res))
	{
  
  ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row['Name']; ?></td>
      <td><?php echo $row['Mobile'];?></td>
      
	  <td><?php echo $row['Item'];?></td>
	    <td><?php echo $row['Description'];?> </td>
		  <td><?php echo $row['Address'];?></td>
      <td><?php echo $row['Preference'];?></td>
			<td style="color:green;"><?php echo $row['Status'];?></td>
      <td><?php echo $row['reason'];?></td>
			<td><form method="post" action="" >
			<textarea name="reason"></textarea></td>
			<input type="hidden" name="sno" value="<?php echo $row['sno'];?>">
			<td> 
			<button type="submit" name="approved" class="btn btn-primary">APPROVE</button>
			<button type="submit" name="rejected" class="btn btn-primary">REJECT</button>
			</form></td>
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>
  </tbody>
</table> 
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
