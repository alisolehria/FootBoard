<?php
session_start();
$username=$_SESSION['accountName'];
include "dbConnect.php";

$user_name = strip_tags($_POST["user"]);
$Name =  strip_tags($_POST["name"]);
$Description = strip_tags($_POST["description"]);
$URL = strip_tags($_POST["url"]);
$favourite = strip_tags($_POST["fav"]);
$logo=strip_tags($_POST["logo"]);
$category=strip_tags($_POST["category"]);
$sql1=$conn->prepare("SELECT username from data where username=? AND account=?");
$sql1->execute(array($user_name,$username));

if($sql1->rowCount() > 0){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Twitter account $user_name is already present')
    window.location.href='dash.php';
    </SCRIPT>");
  
	
	}
else{	
$sql =$conn->prepare("INSERT INTO  data (account,username, name, description,category, url,favourite,logo) VALUES (?,'$user_name' ,'$Name','$Description','$category', '$URL','$favourite','$logo')");	
$sql->execute(array($username));

      
 
  
   
 if(! $sql )
   {
      die('Could not enter data: ' . mysql_error());
   }
   
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Twitter account $user_name succesfully added')
    window.location.href='maintainence.php';
    </SCRIPT>");
  
}
   
 //  header('Location:  maintainence.php');
?>

    

