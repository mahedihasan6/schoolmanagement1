<?php
function BD(){
session_start();
if(!isset($_SESSION['login'])){
echo"<script>alert('Please login!!');</script>";
header('location:login.php');
die();
}
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