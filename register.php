<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</head>
	<body> 
		
		<?php
			include "dbConnect.php";
			
		?>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		
    <a href ="index.php" class="navbar-brand">FootBoard.com</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Register</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LogIn <span class="caret"></span></a>
							<ul class="dropdown-menu">
								
								<form action="logIn.php" method="post" accept-charset="UTF-8">
									<input type="text" class="form-control" name="username" placeholder="Username" id="user" required>
									<input type="password" class="form-control" placeholder="password" name="password" required>
									 <div class="col-xs-8 col-lg-offset-3">
									<input type="submit" value="LogIn">	
									    </div>
								</form>
								
						
						</ul>
					</li>
					
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<nav>
			<ul class="nav nav-tabs">
				<li role="presentation"><a href="index.php">Home</a></li>
			</ul>
		</nav>
		<br>
		<div class="col-lg-7 col-lg-offset-4">
			<h1>Register</h1>
			<form method="post" action="signup.php">
				<div class="row">
					<div class="col-xs-4">
						<label for="user">Username:</label>
						<input type="text" class="form-control" name="user" placeholder="Username" id="user" required>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<label for="pass">Password:</label>
						<input type="password" class="form-control" name="pass" placeholder="Enter password" id="pass" required>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" placeholder="Your Name" id="name" required>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<label for="email">Email Address:</label>
						<input type="text" class="form-control" name="email" placeholder="Your Email address" id="email" required>
					</div>
				</div>
				<br>
				<div class = "row">
					<div class="col-lg-4 col-lg-offset-2">
						<input type="submit" class="btn btn-info btn-lg" value="Submit">
					</div>
				</div>
			</div>
		</div>
			</form>
	</div>

</div>
</body>

</html>