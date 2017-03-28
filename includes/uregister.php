<?php require "includes/dbconect.php"; ?>
<?php require "includes/header.php"; ?> ?>
<?php require "includes/register.php" ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
<h1 align="center">User Register</h1>
	<form method="post">
	<table align="center">
		<tr>
			<td>
				Enter User Name : <td><input type="text" name="username"></td>
			</td>
		</tr>
			<tr>
				<td>
					Enter Role : <td><input type="text" name="role"></td>
				</td>
			</tr>
		<tr>
			<td>
				Enter Password :<td> <input type="password" name="password"></td>
			</td>
		</tr>
	
		<tr align="center">
			<td >
				<input type="submit" name="Register" >
			</td>
		</tr>

	</table>	
</form>
</body>
</html>