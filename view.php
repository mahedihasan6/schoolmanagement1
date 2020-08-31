<?php
include('connection.php');

$con=mysqli_connect('localhost','root','','ashiq');

if($con){


}


	else{


		echo "Not ";
	}


?>






<!DOCTYPE html>
<html>
<head>
	<title>Student Information System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	</br></br></br>
	
<div class="container">	
<div class="panel panel-default">

<div class="panel-heading">
<h2 style="text-align:center;">Students Attendence</h2>	
</div>
<div class="panel-body">
	
<table class="table">

	<tr>
<th>Date</th>
<th>Action</th>

</tr>


<?php

$sql="SELECT DISTINCT date from attendance";
$result=mysqli_query($con,$sql);

if($result->num_rows>0){

$i=0;
while($val=mysqli_fetch_assoc($result)){
$i++;	 ?>
<tr>

<td><?php echo $val['date']; ?></td>
<td><a href="viewpor.php?date=<?php echo $val['date']; ?>" class="btn btn-primary">view</a>
	<a href="viewdelete.php?date=<?php echo $val['date']; ?>"  onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a>
</td>


</tr>
<?php }}?>
</table>
</div>
<div class="panel-footer">
<a href="index.php" class="btn btn-danger">Students List</a>
<a href="attendance.php" class="btn btn-info">Take attendence</a>
</div>


</div>
</div>
</body>
</html>