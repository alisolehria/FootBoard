<?php
session_start();
$username=$_SESSION['accountName'];
include "dbConnect.php";	

$value=$_POST["values"];
$name=strip_tags($_POST["name"]);
$description=strip_tags($_POST["description"]);
$url=strip_tags($_POST["url"]);
$favourite=strip_tags($_POST["fav"]);
$logo=strip_tags($_POST["logo"]);
$category=strip_tags($_POST["category"]);



$sql=$conn->prepare("UPDATE data SET name = '$name', description='$description', url='$url', favourite='$favourite',logo='$logo',category='$category' WHERE account=? AND username = '$value'");
$sql->execute(array($username));

if(! $sql){
	 die('Could not enter data: ' . mysql_error());
}

  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Twitter account $value succesfully edited')
    window.location.href='maintainence.php';
    </SCRIPT>");


?>
