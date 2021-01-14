<?php

$uname = $_GET['uname'];
$pass = $_GET['psw'];

if($uname == 'admin' && $pass=='12345'){
	echo 'Login Successful';
	include 'DBMS.php';
}else{
	echo 'Login Unsuccessful';
	echo '<a href="login.php">Go Back</a>';
}
?>