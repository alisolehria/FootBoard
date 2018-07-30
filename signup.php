<?php
include 'dbConnect.php';

$username=strip_tags($_POST['user']);
$password=strip_tags($_POST['pass']);
$name=strip_tags($_POST['name']);
$email=strip_tags($_POST['email']);

$sql1=$conn->prepare("SELECT accountName from user where accountName=?");
$sql1->execute(array($username));
if($sql1->rowCount() > 0){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('$username is already taken')
    window.location.href='register.php';
    </SCRIPT>");
  
	
	}
else{
$sql =$conn->prepare("INSERT INTO  user (accountName,password,name,email) VALUES (?,?,?,?)");
$sql->execute(array($username,$password,$name,$email));

$sql1= $conn->prepare("INSERT INTO data (account,username, name, description,category, url,favourite,logo) VALUES 
(?, 'Arsenal', 'Arsenal FC', 'The official club website brings you all the latest #Arsenal news, views and ticket information from Emirates Stadium', 'Club', 'https://twitter.com/Arsenal1', 'NO', 'https://pbs.twimg.com/profile_images/663653377017061376/C8hg9fpl.jpg'),
(?, 'SkyFootball', 'Sky Sports Football', 'The official account for Sky Sports Football', 'News', 'https://twitter.com/skyfootball', 'NO', 'https://pbs.twimg.com/profile_images/502481550437388288/lFsNcBDR.png'),
(?, 'Cristiano', 'Cristiano Ronaldo', 'This Privacy Policy addresses the collection and use of personal information - http://www.cristianoronaldo.com/terms', 'Player', 'https://twitter.com/Cristiano', 'NO', 'https://pbs.twimg.com/profile_images/659401644002668544/_Jpz-udI_400x400.jpg')");
$sql1->execute(array($username,$username,$username));




echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('$username succesfully registered')
    window.location.href='index.php';
    </SCRIPT>");



}




?>