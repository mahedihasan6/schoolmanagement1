
<!--- insert student information 
-->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
session_start();
$name=$_POST['name'];
$age=$_POST['age'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$roll=$_POST['roll'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$file_name = $_FILES['image']['name'];
$file_temp = $_FILES['image']['tmp_name'];
$folder = "uploads/";
 move_uploaded_file($file_temp, $folder.$file_name);
$date=$_POST['date'];
$con=mysqli_connect('localhost','root','','ashiq');

$sql="INSERT INTO  students VALUES(NULL,'$name',$age,'$fname','$mname',$roll,'$address',$mobile,'$email','$file_name','$date')";

if(mysqli_query($con,$sql)){

$_SESSION['success']=1;
header("location:login.php");
}
else{

$_SESSION['error']=1;
	echo "Not inserted new student";
}



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
	<br><br><br>
<div class="container">
	<div class="row">		

<div class="col-md-12" style="box-shadow:1px 1px 7px #aaa;">
	<h2 style="text-align:center">New Student Form</h2>
	<hr>
<form action=" " method="POST" enctype="multipart/form-data">
<div class="form-group col-md-6">
<label for="name">Name:</label>
<input required type="text" class="form-control" name="name" placeholder="Student name"></div>
<div class="form-group col-md-6">
<label for="age">Age:</label>
<input required type="number" class="form-control" name="age" placeholder="Student Age"></div>
<div class="form-group col-md-6">
<label for="fname">Father Name:</label>
<input required type="text" class="form-control" name="fname" placeholder="Father name"></div>
<div class="form-group col-md-6">
<label for="mname">Mother Name:</label>
<input required type="text" class="form-control" name="mname" placeholder="Mother name"></div>
<div class="form-group col-md-6">
<label for="roll">Given serial:</label>
<input required type="number" class="form-control" name="roll" placeholder="Student serial number"></div>
<div class="form-group col-md-6">
<label for="address">Address:</label>
<input  required type="text" class="form-control" name="address" placeholder="Student Adress"></div>
<div class="form-group col-md-6">
<label for="mobile">Mobile:</label>
<input required type="number" class="form-control" name="mobile" placeholder="Mobile Number"></div>
<div class="form-group col-md-6">
<label for="Email">Email:</label>
<input required type="email" class="form-control" name="email" placeholder="Student Email"></div>
<div class="form-group col-md-6">
<label for="Image">Image:</label>
<input required type="file" class="form-control" name="image"></div>
<div class="form-group col-md-6">
<label for="Date">Date:</label>
<input required type="date" class="form-control" name="date"></div>
<button type="submit" class="btn btn-success  btn-block" onclick="return confirm('Are you sure want to submit?');">Submit</button>
</form>
<br>

</div>
</div>

</div>


</body>
</html>