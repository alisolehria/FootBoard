<?php
session_start();
$_SESSION['accountName'] = strip_tags($_POST['username']);
$_SESSION['password'] = strip_tags($_POST['password']);
include "dbConnect.php";


$uname=strip_tags($_SESSION['accountName']);
$pass=strip_tags($_SESSION['password']);




$sql= $conn -> prepare('SELECT * FROM user where accountName= ? AND password= ?');
$sql->execute(array($uname,$pass));


if($sql->rowCount() > 0){
		header("Location: uindex.php");
		
	
}



else{
	  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Username/Password is inavlid, Please Register if you havent registered yet.')
    window.location.href='register.php';
    </SCRIPT>");
	
}

?>