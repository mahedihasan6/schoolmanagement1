<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

$email=$_POST['email'];

$pass=$_POST['password'];


$con=mysqli_connect('localhost','root','','ashiq');

$sql="SELECT * FROM users WHERE email='$email'AND password='$pass'";

$result=(mysqli_query($con,$sql));

$count= mysqli_num_rows($result);

if($count==1){
session_start();
$_SESSION['login']=true;
header('Location:index.php');
}else{

	echo"<div class='alert alert-danger'><strong>Something  went wrong</strong></div>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Information System</title>
	<meta http-equiv="refresh" content="30">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<br><br><br><br>
<div class="container">
	<div class="row">
	
<?php
session_start();
if(isset($_SESSION['success']))
 { ?>
<div class="alert alert-success"><strong> Congratulations!!Your information added successfully</strong></div>
<?php } 

unset($_SESSION['success']);
?>
<div class="col-md-3 col-md-offset-4" style="box-shadow:1px 1px 7px #aaa;">
	<h2 style="text-align:center;">Login Here</h2>
	<hr>
<form action=" " method="POST">
<div class="form-group">
<label for="email">Email:</label>
<input required type="email" class="form-control" name="email" placeholder="User email"></div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" class="form-control" name="password" placeholder="Enter Password"></div>
<button type="submit" class="btn btn-success col-md-12">Login</button>
</form>
<a href="update.php" class="btn btn-info col-md-12" style="margin-top:5px;">New student</a>
<br><br>
<br><br>
<br><br>
</div>
</div>
</div>


</body>
</html>