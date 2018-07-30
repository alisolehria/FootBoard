<?php


$query=$conn->prepare('DROP TABLE tweets');

$sql='CREATE TABLE tweets(
	user_name VARCHAR(20) NOT NULL,
	accname VARCHAR(20) NOT NULL,
	tweet VARCHAR(200) NOT NULL, 
	timeOfTweet VARCHAR(100) NOT NULL
)ENGINE=INNODB';
$query->execute();
$conn->exec($sql);

//$conn->execute($query);

?>