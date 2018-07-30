<?php
	session_start();
	$username=$_SESSION['accountName'];
	include "dbConnect.php";
	$user_name = $_POST["values"];
	
	$sql=$conn->prepare("DELETE FROM data where account = ? AND username = ?");
	$sql->execute(array($username,$user_name));
	

	
	if(! $sql){
		echo "Cant";
		
		}
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Twitter account $user_name succesfully removed')
    window.location.href='maintainence.php';
    </SCRIPT>");
	
	
	
	
	
	
	
	
	
	
?>	