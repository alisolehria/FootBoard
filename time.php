<div class="row">
				<div class="col-xs-offset-3 col-xs-6">
					<?php
					session_start();
					$username=$_SESSION['accountName'];
					include "dbConnect.php";
						$sql="SELECT user_name, accname, tweet,timeOfTweet FROM tweets ORDER BY timeOfTweet";
						$sql1="SELECT logo from data,tweets where account = '$username' AND data.username=tweets.user_name ORDER BY timeOfTweet";
						$run=mysql_query($sql);
						$run1=mysql_query($sql1);
						
						while($test=mysql_fetch_array($run)){
							$test1=mysql_fetch_array($run1);
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