<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

$name=$_POST['nicename'];
$s_id=$_POST['stu_id'];
include('connection.php');
$sql="INSERT INTO confirmstu VALUES(NULL,'$name',$s_id)";
$result=mysqli_query($con,$sql);
if($result){
	echo"<div class='alert alert-success'><strong>Student information added successfully!!!</strong></div>";
}
else{

	echo"<div class='alert alert-danger'>Something went wrong!!!</div>";
}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Information System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta http-equiv="refresh" content="50">
</head>
<body>
	<br><br><br>
<div class="container">
	<div class="row">		

<div class="col-md-12" style="box-shadow:1px 1px 7px #aaa;">
	<h2 style="text-align:center">Student confirm information</h2>
	<a  class="btn btn-danger pull-right" href="index.php">Back</a>	
	<hr>
<form action=" " method="POST">
<div class="form-group">
<label for="nice name">Student User Name:</label>
<input required type="text" class="form-control" name="nicename" placeholder="Enter student user name"></div>
<div class="form-group">
<label for="stu_id">Enter Student Serial number:</label>
<input type="number" class="form-control" name="stu_id" placeholder="Enter given serial"></div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
<br>

</div>
</div>

</div>


</body>
</html>