<?php require "includes/guest.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php 
$username=$role=$password="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	 if (empty($_POST["username"])) 
	 {
    $username = "* Name is required";
  } else {
    $name = $_POST["username"];
}
if (empty($_POST["role"])) 
	 {
    $role = "* Role is required";
  } else {
    $name = $_POST["role"];
}
if (empty($_POST["password"])) 
	 {
    $password = "* Password is require";
  } else {
    $name = $_POST["password"];
}
}
 ?>
<h1 align="center">User Register</h1>
	<form method="post"   style="text-align: -webkit-center; margin-top: 30px;">
	<table   style="margin: 20px;"  >
		<tr>
			<td style="padding: 2mm";>
				Enter User Name : <td ><input type="text" name="username"
				<?php if(!empty($_POST['username'])){
					echo "value ='". $_POST['username']."'";
				} 
				?>
				></td>
			</td>
		 <td><span class="error"> <?php echo $username;?></span></td> 
		</tr>
			<tr>
				<td  style="padding: 2mm";>
					Select Role :
				</td>
				<td>
					<select name="role">
						<option value="user"
						<?php if(isset($_POST['role'])){
							if($_POST['role'] == 'user')
								echo "selected";
							} ?>
						>User</option>
						<option value="admin"
						<?php if(isset($_POST['role'])){
							if($_POST['role'] == 'admin')
								echo "selected";
							} ?>
						>Admin</option>
					</select>	
				</td>
				<td><span class="error"> <?php echo $role;?></span></td>
			</tr>
		<tr>
			<td  style="padding: 2mm";>
				Enter Password :<td> <input type="password" name="password"></td>
				</td>
			<td><span class="error"> <?php echo $password;?></span></td>
		</tr>
	
		<tr >
			<td >
				
			</td>
		</tr>

	</table>	
				<button class="elem btn btn-medium btn-primary" type="submit" name="Register" value="submit" style="padding: 2mm; margin-right: -35mm;">Register</button>
</form>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "Register success";
	}
	

?>
<?php require "includes/footer.php"; ?>
</body>
</html>