
<?php
$val='aniket';
$filepath = "../test/".$_FILES["file"]["$val"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "done";   
} 
else 
{
echo "Error !!";
}
 
?>
<html>
    <body>
        <img src="$filepath$val" height=200 width=300>
    </body>
</html>
