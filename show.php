<?php
include('connection.php');

$ID=$_GET['ID'];


$con=mysqli_connect('localhost','root','','ashiq');
$sql="SELECT * FROM students where ID=$ID";
$result=mysqli_query($con,$sql);
$std=mysqli_fetch_assoc($result);

?>






<!DOCTYPE html>
<html>
<head>
	<title>Student Information System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<br><br><br>
<div class="container">
	<div class="row">
<div class="col-md-3"><a class=" btn btn-info" href="index.php">Student List</a></div>		

<div class="col-md-8" style="box-shadow:1px 1px 7px #aaa;">
	<h2 class="center">Student Information</h2><hr>
	<br>
	<div class="text-center">
  <img src="<?php echo 'uploads/'.$std['image'];?>" class="rounded"  height='180' width='200' style="margin-bottom:5px; border:1px solid gray; padding:2px;">
</div>
<table class="table table-bordered"  >

<tr><th>Name:</th>
	<td><?php echo $std['name'];?></td>
</tr>
<tr><th>Age:</th>
	<td><?php echo $std['age'];?></td>
</tr>
<tr><th>Roll No:</th>
	<td><?php echo $std['roll'];?></td>
</tr>
<tr><th>Father name:</th>
	<td><?php echo $std['fname'];?></td>
</tr>
<tr><th>Mother name:</th>
	<td><?php echo $std['mname'];?></td>
</tr>
<tr><th>Address:</th>
	<td><?php echo $std['address'];?></td>
</tr>
<tr><th>Mobile:</th>
	<td><?php echo $std['mobile'];?></td>
</tr>
<tr><th>Email:</th>
	<td><?php echo $std['email'];?></td>
</tr>
<tr><th>Admission Date:</th>
	<td><?php echo $std['date'];?></td>
</tr>
</table>


</div>
</div>

</div>


</body>
</html>