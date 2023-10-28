<?php 
$host="localhost";
$user="root";
$pass="";
$db="grocery";
$con=mysqli_connect($host,$user,$pass,$db);
if(!$con){
	die('connection failed'.mysqli_connect_error());
}else{
	echo "<script>alert('successfully')</script>";
}
?>