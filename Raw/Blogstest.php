<?php 

$mydb=new mysqli("localhost","root","","webbase");
	if ($mydb -> connect_error) {
	echo "Failed to connect: ";
	}
	else{
		$sql = "SELECT `UserName`, `Topic`, `Blogs` FROM `blogs`";
        $result = $mydb->query($sql);
    }

?>

<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	</head> 
	<body style="background-color: aliceblue;" class="container-fluid;"> 
    <?php $a=1;
    while($rows= mysqli_fetch_assoc ($result)) 

		{
        
		?> 
    <div id="accordion<?php print($a); ?>">
      <div class="card">
        <div class="card-header" id="headingTwo<?php print($a); ?>">
         <h5 class="mb-0">
          <button style="font-size:x-large; color:#FF7B2E;" class="btn btn-link collapsed nav-link links" data-toggle="collapse" data-target="#collapseTwo<?php print($a); ?>" aria-expanded="false" aria-controls="collapseTwo">
          <i class="bi bi-journals"></i> <?php echo $rows['Topic'];?>
            </button>
            
          </h5>
          <h4 style="float: right;"><i class="bi bi-person-lines-fill" style="color: #FF7B2E; padding-right:12px; font-size:xxs-large;"></i><?php echo $rows['UserName'];?></h4>
        </div>
        <div id="collapseTwo<?php print($a); ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion<?php print($a); ?>">
          <div class="card-body">
            <?php echo $rows['Blogs']; ?>
          </div>
      </div>
    </div>

    <?php 
          $a=$a+1;  } 
          ?> 
   
	</body> 
</html>