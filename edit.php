<!--- update student information 
-->
<?php
$ID=$_GET['ID'];
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

$sql="UPDATE students SET name='$name',age='$age', fname='$fname',mname='$mname', roll='$roll',address='$address',mobile='$mobile' ,email='$email',
image='$file_name' where ID=$ID ";

if(mysqli_query($con,$sql)){

echo "<div class='alert alert-success'><strong>Updated successfully!!!</strong></div>";
}
else{

	echo "<div class='alert alert-danger'>Something  went wrong not updated</div>";
}
}
?>
<!--- Showinng student information 
-->
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
	<meta http-equiv="refresh" content="560">
</head>
<body>
	<br><br>
<div class="container">
	<div class="row">
<div class="col-md-3"><a class=" btn btn-info" href="index.php">Student List</a></div>		

<div class="col-md-9" style="box-shadow:1px 1px 7px #aaa;">
	<h2 class="center">Edit Student Information</h2>
	<hr>
<form action=" " method="POST" enctype="multipart/form-data">
<div class="form-group col-md-6">
<label for="name">Name:</label>
<input required type="text" class="form-control" name="name" placeholder="Student name" value="<?php echo $std['name']?>"></div>
<div class="form-group col-md-6">
<label for="age">Age:</label>
<input required type="number" class="form-control" name="age" placeholder="Student Age" value="<?php echo $std['age']?>"></div>
<div class="form-group col-md-6">
<label for="fname">Father Name:</label>
<input required type="text" class="form-control" name="fname" placeholder="Father name" value="<?php echo $std['fname']?>"></div>
<div class="form-group col-md-6">
<label for="mname">Mother Name:</label>
<input required type="text" class="form-control" name="mname" placeholder="Mother name" value="<?php echo $std['mname']?>"></div>
<div class="form-group col-md-6">
<label for="roll">Roll:</label>
<input required type="number" class="form-control" name="roll" placeholder="Student serial number" value="<?php echo $std['roll']?>"></div>
<div class="form-group col-md-6">
<label for="address">Address:</label>
<input  required type="text" class="form-control" name="address" placeholder="Student Adress" value="<?php echo $std['address']?>"></div>
<div class="form-group col-md-6">
<label for="mobile">Mobile:</label>
<input required type="number" class="form-control" name="mobile" placeholder="Mobile Number" value="<?php echo $std['mobile']?>"></div>
<div class="form-group col-md-6">
<label for="Email">Email:</label>
<input required type="email" class="form-control" name="email" placeholder="Student Email" value="<?php echo $std['email']?>"></div>
<div class="form-group col-md-6">
<label for="Image">Image:</label>
<input required type="file" class="form-control" name="image" height='100' width='100' value="<?php echo $std['image']?>"><img src="<?php echo 'uploads/'.$std['image'];?>" class="rounded"  height='100' width='100' style="margin-bottom:5px; border:1px solid gray; padding:2px;"></div>
<div class="form-group col-md-6">
<label for="Date">Date:</label>
<input required type="date" class="form-control" name="date" value="<?php echo $std['date']?>"></div>
<button type="submit" class="btn btn-success  btn-block" onclick="return confirm('Are you sure want to update?');">Update</button>
</form>
</br>

</div>

</div>

</div>


</body>
</html>