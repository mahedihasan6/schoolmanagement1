<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

$name=$_POST['nicename'];
$s_id=$_POST['stu_id'];
$pass=$_POST['password'];
include('connection.php');
$sql="SELECT * FROM confirmstu WHERE nicename='$name' AND stu_id='$s_id'";
$result=(mysqli_query($con,$sql));
$count=mysqli_num_rows($result);
if($count==1 AND $pass==123456){
	header('location:insert.php');
}
else{

	echo"<div class='alert alert-danger'>Please enter correct information!!!</div>";
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
	<h2 style="text-align:center">Student confirm</h2>
	<a  class="btn btn-danger pull-right" href="index.php">Back</a>	
	<hr>
<form action=" " method="POST">
<div class="form-group">
<label for="nice name">User Name:</label>
<input required type="text" class="form-control" name="nicename" placeholder="User name "></div>
<div class="form-group">
<label for="stu_id">Enter given number:</label>
<input type="password" class="form-control" name="stu_id" placeholder="Enter given serial"></div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" class="form-control" name="password" placeholder="Enter Password"></div>
<button type="submit" class="btn btn-success">Login</button>
</form>
<br>

</div>
</div>

</div>


</body>
</html>