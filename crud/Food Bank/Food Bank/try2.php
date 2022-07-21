<?php
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

<html>
<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Employee EMS</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
            <li><a href="dashboard.php">Dashboard</a></li>
       <li><a href="task.php">Task</a></li>
	   <li><a href="leave.php">Leave</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>
<head>
<title>All Applied Leaves</title>
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<!------including header here --------->

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
		$_SESSION['success']="Row Updated successfully!";
		
	}else{
		echo "Data not Updated, please try again!";
	}
}


?>
<!------end header here --------->
<div class="container">
<h3>All Applied Leave Lists</h3>
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
		    <th>Status</th>
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
			<td style="color:green;"><?php echo $row['Status'];?></td>
			<td><form method="post" action="" >
			<textarea name="reason"></textarea></td>
			<input type="hidden" name="sno" value="<?php echo $row['sno'];?>">
			<td> 
			<button type="submit" name="approved" class="btn btn-primary">Approved</button>
			<button type="submit" name="rejected" class="btn btn-primary">X</button>
			</form></td>
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>
  </tbody>
</table> 
</div>
</body>
</html>