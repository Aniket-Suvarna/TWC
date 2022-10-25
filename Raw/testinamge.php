<?php

$topic = $_POST['topic'];
$blog = $_POST['blog'];
session_start();
$uname = $_SESSION['suname'];
if($topic==null){
	include "../Sign_in/Blogs_main_login.html";
}
else{
	$mydb=new mysqli("localhost","root","","webbase");
	if ($mydb -> connect_error) {
	echo "Failed to connect: ";
	}
	else{

		$sql = "INSERT INTO `blogs`(`UserName`, `Topic`, `Blogs`) 
				VALUES ('$uname','$topic','$blog')";
		if($mydb->query($sql) === TRUE){
			$_SESSION['suname'] = $uname;
			header("Location: ../Sign_in/Home_Login.html");
			
			
		}
		else{ 
			echo "statement not done";
		}
		
	}
}


?>