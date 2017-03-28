<?php require "includes/guest.php"; ?>
<?php require "includes/header.php"; ?>

<!DOCTYPE html>
<head>
	<title>Login</title>
</head>
<body>
<center>
<h1 align="center" style="padding-top: 30px;">Login Page</h1>
<form method="post" action="auth.php">
<table align="center"  width="100" height="30" style="margin-top: 30px">
	<tr>
		
		<td>
		<b>User Name</b> :  <input type="text" name="username">
		</td>
	</tr>
	<tr>
		<td>
		<b>Password</b> :  <input type="password" name="password">
		</td>
	</tr>
	<tr>
		<td>
				
		</td>
	</tr>	
</table>
	<button class="elem btn btn-medium btn-primary" type="submit" name="login" value="login" style="padding: 2mm; margin-right: -5mm;">Login</button>
</form>
</center>
</body>
<?php require 'includes/footer.php'; ?>
</html>