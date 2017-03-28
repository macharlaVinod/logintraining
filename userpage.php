<?php 
session_start();
if ($_SESSION['role'] == 'user')
{
	header('location: userpage.php');
}
else
{
 header('location: login.php');
}
?>
<?php require "includes/dbconect.php"; ?>
<?php require "includes/header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
</head>
<body>
<h1  style=" margin-top: 80px" ;>Welcome to User Next Page</h1>
This page For Users Check-in Details...........
</body>
<?php require "includes/footer.php"; ?>
</html>