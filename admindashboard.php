<?php 
require "includes/guest.php"; 
require "includes/header.php"; 
require "includes/dbconect.php"; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<center>
<h1 align="center" style="padding-top: 30px; padding-bottom: 40px";>Admin Dashboard</h1>
<table align="center" border="1" cellspacing="0" cellpadding="0" width="600" >
 			<thead  >
 				<tr style="text-align: center">
 				<th>Id</th>
 				<th>Role</th>
			 	<th>User Name</th>
			 	<th>Created_at</th>
			 	<th>Updated_at</th>
			 	</tr>
 			</thead>
 			<tbody style="text-align: center" >
 			<?php 

						######### User Register Table #########

					$sql=mysql_query("select * from users");
					while ($row=mysql_fetch_array($sql))
					{
						echo "<tr>	
							<td>".$row['id']."</td>
							<td>".$row['role']."</td>
							<td>".$row['username']."</td>
							<td>".$row['created_at']."</td>
							<td>".$row['udated_at']."</td>
							<tr>";
					}
		
				?>
			</tbody>
		</table>
	
</body>
</center>
<?php require("includes/footer.php");?>
</html>