<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<title>Manage Accounts</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/ajax1.js"></script>
		<?php
			session_start();
			$username=$_SESSION['accountName'];
			include "dbConnect.php";
		?>
		
		
	</head>
	<body> 
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header"> 
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<a href ="uindex.php" class="navbar-brand">FootBoard.com</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					
					<ul class="nav navbar-nav navbar-right">
						<li><?php echo "<p class='navbar-text'>Welcome $username</p>";?></li>
						<li><?php echo "<p class='navbar-text'><a href='index.php'>Sign Out</a></p>";?></li>
					</ul>
			
				
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<nav>
		<ul class="nav nav-tabs">
			<li role="presentation" ><a href="uindex.php">Home</a></li>
			<li role="presentation" class="active"><a href="dash.php">Manage Accounts</a></li>
			<li role="presentation"><a href="maintainence.php">Maintainence</a></li>
			
		</ul>
	</nav>
	
	
	
	<br>
	<div class="col-lg-5 col-lg-offset-3">
		<ul class="nav nav-pills  nav-justified">
			<li class="active"><a data-toggle="pill" href="#add">Add an account</a></li>
			<li><a data-toggle="pill" href="#remove">Remove an account</a></li>
			<li><a data-toggle="pill" href="#edit">Edit an account</a></li>
		</ul>
	</div>
	<br>
	<div class="tab-content">
		
		<div id="add" class="tab-pane fade in active">
			<h1>Add an account</h1>
			
			<div class="col-lg-8 col-lg-offset-4">
				<form method="post" action="add.php" id="adding">
					<div class="row">
						
						<div class="form-group has-success has-feedback">
							<div class="col-xs-4">
								<form method="post" action="add.php">
									<label for="user">Twitter Username:</label>
									<input type="text" class="form-control" name="user" placeholder="Username of the account" id="user" required>
									
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group has-success has-feedback">
								<div class="col-xs-4">
									<label for="name">Name:</label>
									<input type="text" class="form-control" name="name" placeholder="Name of the account" id="name" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group has-success has-feedback">
								<div class="col-xs-4">
									<label for="description">Description:</label>
									<textarea class="form-control" rows="5" id="description" placeholder="A small description of the account" name="description" required></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group has-success has-feedback">
								<div class="col-xs-4">
									<label for="url">URL:</label>
									<input type="url" class="form-control" name="url" placeholder="URL in http://example.com format" id="url" required>
									
								</div>
							</div>
						</div>
							<div class="row">
							<div class="form-group has-success has-feedback">
								<div class="col-xs-4">
									<label for="url">Category:</label>
										<select class='form-control' name='category' >
										<option>Club</option>
										<option>News</option>
										<option>Player</option>
										</select>
									 
									
								</div>
							</div>
						</div>
							<div class="row">
							<div class="form-group has-success has-feedback">
								<div class="col-xs-4">
									<label for="logo">Logo URL:</label>
									<input type="url" class="form-control" name="logo" placeholder="URL in http://example.com format" id="logo" required>
								</div>
							</div>
						</div>
						<br>
						<div class ="row">
							<div class="col-xs-4">
								<label for="fav">Favourite</label>
								<div class="radio">
									<label><input type="radio" name="fav" value="YES" required>Yes</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="fav" value="NO">No</label>
								</div>
							</div>
						</div>
						
						<div class = "row">
							<div class="col-lg-4 col-lg-offset-2">
								<input type="submit" class="btn btn-info btn-lg" value="Submit">
							</div>
						</div>
						
						
						
					</form>
				</div>
			</div>
			
			<div id="remove" class="tab-pane fade">
				<h1>Remove an Account</h1>
				<div class="col-lg-8 col-lg-offset-3">
					<form action="remove.php" method="POST">
						<div class="form-group">
							<label for="sel1"> Select the username to remove:</label>
							<br>
							<div class="col-sm-7">
								<form>
									<?php
										
										$sql = $conn->prepare("Select username from data WHERE account = ?");
										$sql->execute(array($username));
										
										echo "<select class='form-control' id='sel1' name='values' >";
										echo "<option>Select a username</option>";
										while ($row = $sql->fetch()) {
											echo "<option value='" . $row['username'] . "'>" . $row['username'] . "</option>";
										}
										
										echo "</select>";
										
									?>
								</form>
								
								<br>
								<div class="col-lg-4 col-lg-offset-9">
									<input type="submit" class="btn btn-info btn-lg" value="Submit">
								</div>
								
								
							</div>		
							
						</div>
					</div>
				</div>
				
				<div id="edit" class="tab-pane fade">
					<h1>Edit an Account</h1>
					<div class="col-lg-8 col-lg-offset-3">
						<div class="form-group">
							<form action = "edit.php" method = "post">
								<label for="sel1"> Select the username to edit:</label>
								<br>
								<div class="col-sm-7">
									
									<?php
										
										$sql = $conn->prepare("Select username from data WHERE account = ?");
										$sql->execute(array($username));
										
										echo "<select class='form-control' id='sel1' name='values' onchange='showUser(this.value)'>";
										echo "<option>Select a username</option>";
										while ($row = $sql->fetch()) {
											echo "<option value='" . $row['username'] . "'>" . $row['username'] . "</option>";
										}
										
										echo "</select>";
										
										
									?>
									
									<br>
								</div>
								<div id="editform"></div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			
			
			
		</div>
		
		
	</body>
	
</html>					