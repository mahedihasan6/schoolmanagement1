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
	<br><br><br>
<div class="container">	
<div class="panel panel-default">

<div class="panel-heading">
<h2 style="text-align:center;">Students Attendence</h2>	
</div>
<div class="panel-body">
	
<table class="table">
<thead>
	<tr>
<th>Name</th>
<th>Roll</th>
<th>Age</th>
<th>Mobile</th>
<th>Attendance</th>

</tr>
</thead>

<?php
if($_GET['date']){
$date=$_GET['date'];
$sql="SELECT students.*,attendance.* From attendance INNER JOIN students on attendance.ID=students.ID and attendance.date='$date'";
$result=mysqli_query($con,$sql);
	
if($result->num_rows>0){

$i=0;
while($val=mysqli_fetch_assoc($result)){
	
$i++;
?>
<tr>
<td><?php echo $val['name'] ?></td>
<td><?php echo $val['roll']; ?></td>
<td><?php echo $val['age']; ?></td>
<td><?php echo $val['mobile']; ?></td>
<td><?php echo $val['value']; ?></td>
<td></td>

</tr>
<?php }}}?>
</table>
</div>
<div class="panel-footer">
<a href="view.php" class="btn btn-danger">Back</a>
</div>


</div>
</div>
</body>
</html>