<div class="row">
				<div class="col-xs-offset-3 col-xs-6">
					<?php
					session_start();
					$user_name=$_SESSION['accountName'];
					include "dbConnect.php";
						$sql4=$conn->prepare("SELECT user_name, accname, tweet,timeOfTweet FROM tweets,data where data.account =? AND username=user_name AND category='Club'");
						$sql4->execute(array($user_name));
						$sql5=$conn->prepare("SELECT logo from data,tweets where account =? AND data.username=tweets.user_name AND category='Club'");
						$sql5->execute(array($user_name));
			
						while($test4=$sql4->fetch()){
							$test5=$sql5->fetch();
							echo "<table>";
							echo "<tr><td><img src='$test5[0]' class='twitter-image img-circle'></td> <td><h1>@$test4[0]</h1></td></tr></table>";
							echo "<h5>$test4[3]</h5>";
							echo "<h2>$test4[1]</h2>";
						
							echo "<p>$test4[2]</p>";
							echo "<br>";
						
						}
						
					?>
					
					
					
				</div>
				
			</div>