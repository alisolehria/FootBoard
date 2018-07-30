<!DOCTYPE html>
<?php
	include "retrieve.php";
	include "dbConnect.php";
	
	
	
	
	
?>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<?php echo "<title>$user_name's Page</title>"?>
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/ajax2.js"></script>
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
						<li><?php echo "<p class='navbar-text'>Welcome $user_name</p>";?></li>
						<li><?php echo "<p class='navbar-text'><a href='index.php'>Sign Out</a></p>";?></li>
					</ul>
				</li>
				
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<nav>
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="#">Home</a></li>
			<li role="presentation"><a href="dash.php">Manage Accounts</a></li>
			<li role="presentation"><a href="maintainence.php">Maintainence</a></li>
			
		</ul>
	</nav>
	<br>
	<div id="carousel-example" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="row">
			<div class="col-xs-offset-3 col-xs-6">
				<div class="carousel-inner">
					<div class="item active">
						<div class="carousel-content">
							<div>
								<?php	echo "<h2>Tweets from $user_name's favourite Twitter accounts</h2>";?>
							</div>
						</div>
					</div>
					
					<?php
						$sql2=$conn->prepare("SELECT user_name, accname, tweet,timeOfTweet FROM tweets,data where account=? AND user_name=data.username and favourite=?");
						$sql2->execute(array($user_name,'YES'));
						$sql3=$conn->prepare("SELECT logo from data,tweets where account = ? AND data.username= tweets.user_name AND favourite= ? ");
						$sql3->execute(array($user_name,'YES'));
						
						
						while($test2=$sql2->fetch()){
							$test3=$sql3->fetch();
							echo "<div class = 'item'>";
							echo "<div class = 'carousel-content'>";
							echo "<div>";
							echo "<table>";
							echo "<tr><td><img src='$test3[0]' class='twitter-image img-circle'></td> <td><h1>@$test2[0]</h1></td></tr></table>";
							echo "<h5>$test2[3]</h5>";
							echo "<h2>$test2[1]</h2>";
							echo "<p>$test2[2]</p>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
						}
						
						
					?>
					
					
				</div>
			</div>
		</div>
		
		<!-- Controls --> <a class="left carousel-control" href="#carousel-example" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
		
	</div>
	
	<br>
	<div class="row">
		<div class="span4 text-center">
			<a href="#" id="refresh" class="btn btn-primary btn-md" onclick="refresh()">
				<span class="glyphicon glyphicon-refresh" ></span> Refresh
			</a>
	
			<a href="#" id="Club" class="btn btn-success btn-md" onclick="club()">
				<span class="glyphicon glyphicon-circle-arrow-down" ></span> Club Accounts
			</a>
	
			<a href="#" id="Player" class="btn btn-success btn-md" onclick="player()">
				<span class="glyphicon glyphicon-circle-arrow-down" ></span> Player Accounts
			</a>
	
			<a href="#" id="News" class="btn btn-success btn-md" onclick="news()">
				<span class="glyphicon glyphicon-circle-arrow-down" ></span> News Accounts
			</a>

			
			<a href="#" id="alpha1" class="btn btn-success btn-md" onclick="alpha1()">
				<span class="glyphicon glyphicon-circle-arrow-down" ></span> A-Z
			</a>
	
			<a href="#" id="alpha2" class="btn btn-success btn-md" onclick="alpha2()">
				<span class="glyphicon glyphicon-circle-arrow-up" ></span> A-Z
			</a>
		</div>
	</div>
	
	
	
	
	<br>
	<div id="load" style='display:none'>
		<div class="col-xs-offset-5 col-xs-6">
			<img src="loader.gif">
		</div>
	</div>
	<div id="start">
		<div class="row">
			<div class="col-xs-offset-3 col-xs-6">
				<?php
					$sql=$conn->prepare("SELECT user_name, accname, tweet,timeOfTweet FROM tweets");
					$sql->execute();
					
					$sql1=$conn->prepare("SELECT logo from data,tweets where account = '$user_name' AND data.username=tweets.user_name");
					$sql1->execute();
					
					while($test = $sql->fetch()){
						$test1 = $sql1->fetch();
						echo "<table>";
						echo "<tr><td><img src='$test1[0]' class='twitter-image img-circle'></td> <td><h1>@$test[0]</h1></td></tr></table>";
						echo "<h5>$test[3]</h5>";
						echo "<h2>$test[1]</h2>";
						
						echo "<p>$test[2]</p>";
						echo "<br>";
						
					}
					
				?>
				
				
				
			</div>
			
		</div>
	</div>
	
</div>
</body>

</html>