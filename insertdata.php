<?php
require_once("connect.php");

$user_fName = $_REQUEST["frist_N"];
$user_lName = $_REQUEST["last_N"];
$user_email = $_REQUEST["u_email"];
$user_phone = $_REQUEST["u_Phone"];

$q  = "INSERT INTO `emplye_users`(`fName`, `lName`, `user_email`, `phone_number`) VALUES ('$user_fName','$user_lName','$user_email','$user_phone')";

$querry = mysqli_query($connect,$q);

if($querry == true){
	echo 1;
}else{
	echo 0;
}
 ?>
