<?php

session_start();
$uname = $_SESSION['suname'];
print($uname);
if($uname==null){
    header("Location:../Local/Sign_in.html");
    
}
else{
    header("Location:../Sign_in/Blogs_login.html");
    
}


?>