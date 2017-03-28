<?php require "includes/guest.php"; ?>
<?php require ("includes/dbconect.php"); ?>
<?php require "includes/header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
<center>
<h1 style="padding-top:30px;  padding-bottom: 40px";>User Dashboard</h1>

 		<table align="center" border="1" cellspacing="1" cellpadding="0" width="600">
 			<thead>
 				<tr>
 				<th style="text-align: center" >Role</th>
			 	<th style="text-align: center" >User Name</th>
			 	</tr>
 			</thead>
 			<tbody>
 				<tr>
 				<td style="text-align: center" ><?php echo $_SESSION['role']; ?></td>
 				<td style="text-align: center" ><?php echo $_SESSION['username']; ?></td>	
 				</tr>
			</tbody>
		</table>
</center>

</body>
<?php require "includes/footer.php"; ?>
</html>