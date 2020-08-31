<?php
$ID=$_GET['ID'];


$con=mysqli_connect('localhost','root','','blog');
$sql="DELETE FROM students where ID=$ID";
$result=mysqli_query($con,$sql);
if($result){

	header("Location: index.php");
}
else{

	echo "Not deleted";
}

?>