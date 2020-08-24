<?php
require_once("connect.php");

$userName = $_REQUEST["frist_N"];
$userPassword = $_REQUEST["last_N"];
$userPassword = $_REQUEST["u_email"];
$userPassword = $_REQUEST["u_phone"];

$q  = "INSERT INTO `emplye_users`(`fName`, `lName`, `uemail`, `phone_number`) VALUES ('$userName','$userPassword','$userPassword','$userPassword')";

$querry = mysqli_query($connect,$q);

if($querry == true){
	echo 1;
}else{
	echo 0;
}
 ?>
