<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "users";

//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;

$connect = mysqli_connect($host,$user,$password,$db_name);

if (!$connect){
	die('could not connect:'.mysqli_error($db_selected));
}
$db_selected=mysqli_select_db($connect,$db_name);
if(!$db_selected){
	die('cant use '.$dbhost.':'.mysqli_error($connect));
}
?>