<?php 
 if (isset($_POST['upload'])){
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"]; 
$folder = "../test/".$filename;
move_uploaded_file($tempname, $folder);
 }
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">
  
  <form method="POST" enctype="multipart/form-data">
      <input type="file" name="uploadfile" value="">
        
      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>
  </form>
</div>
</body>
</html>