<?php
session_start();
if(!isset($_SESSION['login'])){
header('location:login.php');
die();
}
include('connection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){

$name=$_POST['name'];
$email=$_POST['email'];

$pass=$_POST['password'];

$con=mysqli_connect('localhost','root','','ashiq');

$sql="INSERT INTO `users`(`id`, `name`, `email`, `password`) VALUES (NULL,'$name','$email','$pass')";

$result=(mysqli_query($con,$sql));
if($result){
echo"<div class='alert alert-success'>New Teacher Added!!!</div>";
}else{
echo"<div class='alert alert-danger'>Something  went wrong</div>";
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
	<h2 style="text-align:center">Add new teacher</h2>
	<a  class="btn btn-danger pull-right" href="index.php">Back</a>	
	<hr>
<form action=" " method="POST">
<div class="form-group">
<label for="name">Name:</label>
<input required type="text" class="form-control" name="name" placeholder="Teacher name"></div>
<div class="form-group">
<label for="email">Email:</label>
<input required type="email" class="form-control" name="email" placeholder="User email"></div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" class="form-control" name="password" placeholder="Enter Password"></div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
<br>

</div>
</div>

</div>


</body>
</html>