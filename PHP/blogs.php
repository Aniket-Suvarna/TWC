<?php

$topic = $_POST['topic'];
$blog = $_POST['blog'];
$height = $_POST['height'];
$width = $_POST['width'];

$target_dir = "../BlogsImages/";
$filenames=$_FILES["fileToUpload"]["name"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
echo "$fn";
echo "$target_file";


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

		$sql = "INSERT INTO `blogs`(`UserName`, `Topic`, `Blogs`, `Filename`, `Height`, `Width`) 
				VALUES ('$uname','$topic','$blog','$filenames','$height','$width')";
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