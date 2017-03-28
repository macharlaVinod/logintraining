<?php 
require "includes/dbconect.php";
require "includes/guest.php";
$username = '';
$password = '';
if(isset($_POST['username'])){
	$username = $_POST['username'];
}
if(isset($_POST['password'])){
	$password = $_POST['password'];
	$hashed_password = sha1($password);
}

$query_string = "SELECT * FROM  users WHERE username = '$username ' and password = '$hashed_password'";
$query_result = mysql_query($query_string);	
$row = mysql_fetch_array($query_result);

if ($row) 
{
	$_SESSION['role'] = $row['role'];
	$_SESSION['username'] = $row['username'];
	if($row['role'] == 'admin'){
		header('location:admindashboard.php');
	}elseif ($row['role'] == 'user') {
		header('location:userdashboard.php');
	}			
}else{
	header('location:login.php');
}

?>