<?php
session_start();
if(!isset($_SESSION['login'])){
header('location:login.php');
die();
}

$con=mysqli_connect('localhost','root','','ashiq');

if($con){

$sql="SELECT * FROM students";
$result=mysqli_query($con,$sql);

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
	<h2 style="text-align:center;">Student Inforamtion Admin Panel</h2>
	<br>
<div class="container">
	<div class="row">
<div class="col-md-3">
<div class="list-group">
<a  href="index.php" class="list-group-item list-group-item-action active">Home</a>
<a  href="attendance.php" class="list-group-item list-group-item-action">Take attendance</a>	
<a  href="view.php" class="list-group-item list-group-item-action">View attendance</a>
<a  href="add_admin.php" class="list-group-item list-group-item-action">Add New Teacher</a>
<a  href="insert.php" class="list-group-item list-group-item-action">Add New Student</a>
<a  href="logout.php" class="list-group-item list-group-item-action">Sign Out</a></div></div>

<div class="col-md-9" style="box-shadow:1px 1px 7px #aaa; text-align:center;">
	<h3>Student List</h3>
	<br>
<table class="table table-bordered">

<thead>
<th style="text-align:center;">Name</th>
<th style="text-align:center;">Age</th>
<th style="text-align:center;">Roll No.</th>
<th style="text-align:center;">Actions</th>
</thead>

<tbody>

<?php while($row=mysqli_fetch_assoc($result)) {?>
	<tr>	
<td><?php echo $row['name']?></td>
<td><?php echo $row['age']?></td>
<td><?php echo $row['roll']?></td>
<td>
<a  class="btn btn-info"href="show.php?ID=<?php echo $row['ID'];?>">View</a>
<a  class="btn btn-warning" href="edit.php?ID=<?php echo $row['ID'];?>">Edit</a>
<a  class="btn btn-danger" onclick="return confirm('Are you sure?');" href="delete.php?ID=<?php echo $row['ID'];?>">Delete</a>
</td>
</tr>
<?php }?>
</tbody>
</table>


</div>
</div>

</div>


</body>
</html>