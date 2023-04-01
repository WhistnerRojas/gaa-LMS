<?php

$host = "localhost";
$user = "root";
$password = "nherrojas";
$db_name = "users";

//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;

$connect = mysql_connect($host,$user,$password);

if (!$connect){
	die('could not connect:'.mysql_error());
}
$db_selected=mysql_select_db($db_name);
if(!$db_selected){
	die('cant use '.$dbhost.':'.mysql_error());
}
?>