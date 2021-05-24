<?php 

require_once("connect.php");

$full_name=$_POST["txtFull_Name"];
$dob=$_POST["txtDOB"];

$sql = "INSERT INTO customer VALUES (NULL,'$full_name','$dob')";

$result = mysqli_query($conn,$sql);
if($result == false){
	die("Error: ".mysqli_error($conn));
}
else{
	echo "<h1>Thêm thành công!</h1>";
}
 ?>