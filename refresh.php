<div class="row">
				<div class="col-xs-offset-3 col-xs-6">
					<?php
					include "retrieve.php";
					include "dbConnect.php";
						$sql=$conn->prepare("SELECT user_name, accname, tweet,timeOfTweet FROM tweets");
						$sql->execute();
						$sql1=$conn->prepare("SELECT logo from data,tweets where account =? AND data.username=tweets.user_name");
						$sql1->execute(array($user_name));
					
						
						while($test=$sql->fetch()){
							$test1=$sql1->fetch();
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