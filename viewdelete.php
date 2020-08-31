<?php
if(isset($_GET['date'])){
	$date=$_GET['date'];
	include('connection.php');
$sql="DELETE FROM attendance WHERE attendance.date='$date'";
$result=mysqli_query($con,$sql);
header('Location:view.php');	
}

?>
