<?php
session_start();
if(!isset($_SESSION['login'])){
header('location:login.php');
die();
}
include('connection.php');


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
<div class="panel panel-default">

<div class="panel-heading">
<h2 style="text-align:center;">Students Attendence</h2>	
</div>

<div class="panel-body">
<a class="btn btn-warning pull-left" href="index.php">Student list</a>
<a class="btn btn-info pull-right" href="view.php">View Attendance</a>
<form action=" " method="POST">	
<table class="table">

	<tr>
<th>Name</th>
<th>Roll</th>
<th>Age</th>
<th>Attendance</th>
</tr>

<?php
$sql="SELECT * FROM students";

$result=mysqli_query($con, $sql);

while($row=mysqli_fetch_assoc($result)){	
?>
<tr> 
<td><?php echo $row['name']?></td>
<td><?php echo $row['roll']?></td>
<td><?php echo $row['age']?></td>
<td>
Present : <input required type="radio" value="Present" name="attendence[<?php echo $row['ID']?>]">
Absent : <input required type="radio" value="Absent" name="attendence[<?php echo $row['ID']?>]">
</td>
</tr>
<?php }?>
</table>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
$att=$_POST['attendence'];
$datepicker=date("d-m-y");
$sql="SELECT DISTINCT date from attendance";
$result=$con->query($sql);
$b=false;
if($result->num_rows>0){
while($check=mysqli_fetch_assoc($result)){
if($datepicker==$check['date']){
	$b=true;
	echo"<div class='alert alert-danger'><strong>Attendance alrady taken today!!!</strong></div>";

}
}
}
if(!$b){
foreach ($att as $key => $value) {
	if($value!='Present'){
	$sql="INSERT INTO attendance(att_id,value,ID,date) VALUES (NULL,'Absent',$key,'$datepicker')";
	$insertresult=$con->query($sql);	
	}
	else{
		$sql="INSERT INTO attendance(att_id,value,ID,date) VALUES (NULL,'Present',$key,'$datepicker')";
	$insertresult=$con->query($sql);	
	}
}
if($insertresult){
	
	echo"<div class='alert alert-success'>Attendance taken successfully!!!</div>";
}

}
}
?>
<input type="submit" class="btn btn-success" value="Take attendence">
</form>	
</div>
<div class="panel-footer">
</div>
</div>
</div>
</body>
</html>