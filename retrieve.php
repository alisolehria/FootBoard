<?php
	session_start();
	$user_name=$_SESSION['accountName'];
	require_once('TwitterAPIExchange.php');
	
	include "dbConnect.php";
	include "tweets.php";
	

	
	$sql= $conn -> prepare('Select username from data where account=?');
	$sql->execute(array($user_name));
	
	
	while($row = $sql->fetch()){

		
		
		
		
		$settings = array(
		'oauth_access_token' => "355735826-TJugwP6T5S9C9unS5sZxlrlSxp3CH8PBfVwoDtVi",
		'oauth_access_token_secret' => "zMHLwKTTFwvtDWhmVSSmx7o62jFk2WJIXmgIypUQ6wMDr",
		'consumer_key' => "TFAP0dyHDW0NlNUsB5gC5dW6J",
		'consumer_secret' => "JOLDDrGmcQmiIhULYrTmXQqow68j7iwyrTaN5SQKFHCLCOUWOj"
		);
		
		$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
		
		$tuser=$row[0];
		$requestMethod = "GET";
		$getfield = "?screen_name=$tuser&count=5";
		
		
		
		$twitter = new TwitterAPIExchange($settings);
		$string = json_decode($twitter->setGetfield($getfield)
		->buildOauth($url, $requestMethod)
		->performRequest(),$assoc = TRUE);
		 
		foreach($string as $items)
		{
			
			
			
			$name=$items['user']['name'];
			$username=$items['user']['screen_name'];
			$tweet=mysql_real_escape_string($items['text']);
			$created=$items['created_at'];
		
						
			$insert=$conn->prepare('Insert Into tweets (user_name,accname,tweet,timeOfTweet) VALUES(?,?,?,?)');
			
			
			$insert->execute(array($username,$name,$tweet,$created));
		
			
		if(!$insert){
				 echo 'Could not enter data: ' . mysql_error();
				}
		}
			 
		
	}
	
?>
