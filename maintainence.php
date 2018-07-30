<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
	<title>Maintainence</title>
	 <link href="css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body> 
 
	<?php
			session_start();
			$username=$_SESSION['accountName'];
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
				
				<a href ="uindex.php" class="navbar-brand">FootBoard.com</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					
					<ul class="nav navbar-nav navbar-right">
						<li><?php echo "<p class='navbar-text'>Welcome $username</p>";?></li>
						<li><?php echo "<p class='navbar-text'><a href='index.php'>Sign Out</a></p>";?></li>
					</ul>
				</li>
				
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
<nav>
<ul class="nav nav-tabs">
  <li role="presentation"><a href="uindex.php">Home</a></li>
  <li role="presentation"><a href="dash.php">Manage Accounts</a></li>
  <li role="presentation"  class="active"><a href="maintainence.php">Maintainence</a></li>
 
</ul>
</nav>
<br><br>
<div class="table-responsive">
	<?php


$query=$conn->prepare("SELECT * FROM data where account =?");
$query->execute(array($username));


      echo '<table class = "table table-striped table-bordered table-hover table-condensed">';
      echo '<tr><th>username</th>';
	  echo '<th>name</th>';
	  echo '<th>description</th>';
	  echo '<th>url</th>';
	  echo '<th>favourite</th></tr>';
	    while( $row = $query->fetch() ){
          echo "<tr><td>{$row['username']}</td><td>{$row['name']}</td><td>{$row['description']}</td><td><a href='{$row['url']}'>{$row['url']}</a></td><td>{$row['favourite']}</tr>\n";
		
        }
     
	
?>



</body>
	 
</html>