<?php 
session_start();
if(isset($_SESSION['role'])){
	if($_SESSION['role'] == 'admin'){
		if($_SERVER['REQUEST_URI'] !='/logintraining/admindashboard.php') {
			header("location:admindashboard.php");
		}
	}elseif ($_SESSION['role'] == 'user')
	{
		if($_SERVER['REQUEST_URI'] !='/logintraining/userdashboard.php') {
			header("location:userdashboard.php");
		}	
	}
	else{
		header("location:index.php");
	}
}else{

	if($_SERVER['REQUEST_URI'] !='/logintraining/login.php' && $_SERVER['REQUEST_URI'] !='/logintraining/uregister.php') {
		header("location:login.php");
	}
}



?>