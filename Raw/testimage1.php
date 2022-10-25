<?php
$target_dir = "../test/";
$filenames=$_FILES["fileToUpload"]["name"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
echo "$fn";
echo "$target_file";

?>