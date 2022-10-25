<?php
if (isset($_POST['upload'])) {
$topic = $_GET['topic'];
$blog = $_GET['blog'];
$ty=$_GET['uploadfile'];
$filename = $_FILES[$ty]["name"];
    $tempname = $_FILES[$ty]["tmp_name"];    
    $folder = "../test/".$filename;
    move_uploaded_file($tempname, $folder);
session_start();
$uname = $_SESSION['suname'];


	$mydb=new mysqli("localhost","root","","webbase");
	if ($mydb -> connect_error) {
	echo "Failed to connect: ";
	}
	else{

		$sql = "INSERT INTO `blogs`(`UserName`, `Topic`, `Blogs`, `Filename`) 
				VALUES ('$uname','$topic','$blog','$filename')";
		if($mydb->query($sql) === TRUE){
			$_SESSION['suname'] = $uname;
			
			
			
		}
		else{ 
			echo "statement not done";
		}
		
	}
}
?>


















<!DOCTYPE html>

<html>
    <head>
        <title>
            Blogs
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <style>
            .btu{
                border: 2px;
                border-style: solid;
                border-color:#FF7B2E;
                color:#FF7B2E;
                background-color: transparent;
                font-size: large;
                border-radius: 5px;
            }
            .btu:hover{
                transition: 0.30s;
                border: 2px;
                border-style: solid;
                border-color:#FF7B2E;
                color:black;
                background-color: #FF7B2E;
                font-size: large;
                border-radius: 5px;
            }
            .bdy{
                background-image: url("../Images/blogbg1.jpg");
                background-size: 100% 220%;
                background-repeat: no-repeat;
                backdrop-filter: blur(6px);
            }
        </style>
    </head> 
    <body class="container-fluid bdy">
        <form method="post">
            
            <div class="form-group">
                <b class="col-sm-2 col-form-label" style="color:black; font-size: larger;"><i class="bi bi-bookmark-heart-fill" style="color:#FF7B2E; font-size: x-large; padding-right: 5px;"></i>Topic:</b>
                <br>
                <br>
                <div class="col-sm-9">
                    <input type="text" name="topic" required class="form-control" style="border-bottom: 4px; border-color: rgb(255, 123, 46); border-style: none none solid none;">
                </div>  
            </div>
            <div  class="form-group">
                <b class="col-sm-2 col-form-label" style="color:black; font-size: larger;"><i class="bi bi-journal-bookmark-fill" style="color:#FF7B2E; font-size: x-large; padding-right: 5px;"></i>Blog:</b>
                <br>
                <br>
                <textarea class="form-control" required rows="5" name="blog" style="border-bottom: 4px; border-color: rgb(255, 123, 46); border-style: none none solid none;"></textarea>
            </div>
            <div class="col-sm-9">
                    <input type="file" name="fn" style="border-bottom: 4px; border-color: rgb(255, 123, 46); border-style: none none solid none;">
                </div>  
            
            
            <br>
            <button type="submit" class="btu" value="upload">Submit</button>
        </form>
        
    </body>
</html>