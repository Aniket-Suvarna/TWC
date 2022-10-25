<?php

$name = $_POST['Name'];
$dob = $_POST['Birth_Date'];
$uname = $_POST['User-Name'];
$email  = $_POST['Email'];
$pass = $_POST['Password'];
$phone = $_POST['Phone'];

$mydb=new mysqli("localhost","root","","webbase");
if ($mydb -> connect_error) {
  echo "Failed to connect: " . $mydb -> connect_error;
}
else{

    $sql = "INSERT INTO `users`(`Name`, `Username`, `Pass`, `DOB`, `Email`, `Phone`) VALUES ('$name','$uname','$pass','$dob','$email','$phone')";
	if($mydb->query($sql) === TRUE){
        header("Location:../Local/Sign_in.html");
	}
	else{ 
		echo '<script type ="text/JavaScript">';  
		echo 'alert("User Name Exist")'; 
		echo '</script>';

		echo '<script type ="text/JavaScript">';  
		echo 'window.location.href="../Local/Sign_in.html"';
		echo '</script>';
		
	}
	
}


?>
