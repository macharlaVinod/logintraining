<!DOCTYPE html>
<html>
<head>
	<title>Search Header</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/logintraining/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="row">
			<nav class="navbar navbar-white navbar-default navbar-fixed-top">
				<div class="container">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="#">ContourSol</a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav navbar-right">
				        
				            <li role="separator" class="divider"></li>
							<?php if (empty($_SESSION['username'])) echo '<li> <a href="uregister.php">
								
							 <button class="elem btn btn-medium btn-primary" >Register</button></a></li>'?>
							 <?php 
							if(isset($_SESSION['username'])){
								echo '<li >'.$_SESSION['username'].'</li><li><a href="logout.php"><button class="elem btn btn-medium btn-primary">Logout</button></a></li>';
							}else{ ?>
								<li><a href="login.php"><button class="elem btn btn-medium btn-primary">Login</button></a></li>
							<?php }?> 
							
				          </ul>
				    </div><!-- /.navbar-collapse -->
	  			</div><!-- /.container-->
			</nav>
		</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </body>
 </html>