<?php 

$mydb=new mysqli("localhost","root","","webbase");
	if ($mydb -> connect_error) {
	echo "Failed to connect: ";
	}
	else{
		$sql = "SELECT `UserName`, `Topic`, `Blogs`, `Filename`, `Height`, `Width` FROM `blogs`";
        $result = $mydb->query($sql);
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
            .links:hover {
                background-color: #FF7B2E;
                border-radius: 5px;
                color:white;
                text-decoration: none;
                
            }
            body{
                background-color: aliceblue;
            }
            .donate{
                float: right;
                background-color: rgb(255, 123, 46); 
                color:white; 
                font-size: x-large; 
                border-radius: 20px; 
                padding:10px;
            }
            .bloglink{
                color:#FF7B2E;
            }
            .bloglink:hover{
                color:black;
                background-color: #FF7B2E;
                transition: 0.5s;
            }
            
        </style>
    
    </head> 
 
    
    <body class="contanier-fluid">
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="border-bottom: 4px; border-color: rgb(255, 123, 46); border-style: none none solid none;">
            <div class="container-fluid ">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container-fluid">

                    <li class="navbar-brand active"><a href="../Local/Home.html"><img  src="../Images/logo1.png"  width="160" height="60"></a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Local/Home.html">Home</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Local/Events.php">Events</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Local/News.html">News</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Local/gallery.html">Gallery</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Local/Blogs_main.php">Blogs</a></li>

                    
                    <li class="navbar-brand active"><a class="nav-link links" href="../Local/Shop.html">Shop</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Local/Emergency.html">Emergency</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-brand active"><a href="../Local/Donate.php"><i class="donate links">Donate</i></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-brand active"><a class="nav-link links" href="../Local/Sign_in.html">Sign In</a></li>
                </ul>
            </div>
        </nav>
        <?php $a=1;
         while($rows= mysqli_fetch_assoc ($result)) 

		{
        
		?> 
        <div id="accordion<?php print($a); ?>">
        <div class="card">
            <div class="card-header" id="headingTwo<?php print($a); ?>">
            <h5 class="mb-0">
            <button style="font-size:x-large; border-radius:5px" class="btn btn-link collapsed nav-link bloglink" data-toggle="collapse" data-target="#collapseTwo<?php print($a); ?>" aria-expanded="false" aria-controls="collapseTwo">
            <i class="bi bi-journals"></i> <?php echo $rows['Topic'];?>
                </button>
                
            </h5>
            <h4 style="float: right;"><i class="bi bi-vector-pen" style="color: #FF7B2E; padding-right:12px; font-size:xxs-large;"></i><?php echo $rows['UserName'];?></h4>
            </div>
            <div id="collapseTwo<?php print($a); ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion<?php print($a); ?>">
            <br>
            <br>
            <div style="font-size:xx-large; border-radius:5px; text-align:center; color:#FF7B2E;">
            <i class="bi bi-chevron-double-left"></i><b><?php echo $rows['Topic'];?></b><i class="bi bi-chevron-double-right"></i>
            </div>
            <br>
            <br>
            <div style="text-align:center;">

                <img src="../BlogsImages/<?php echo $rows['Filename']; ?>" width="<?php echo $rows['Width']; ?>"  height="<?php echo $rows['Height']; ?>" style="border-radius: 40px;">
            </div>
            <br>
            <br>
            <div class="card-body">
                <b style="font-size:xx-large">B</b><b style="font-size: x-large;">y</b>&nbsp;&nbsp;&nbsp;<b style="font-size: x-large;"><?php echo $rows['UserName'];?>&nbsp;:</b><br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div style="font-size:large ;"><?php echo $rows['Blogs']; ?></div>
            </div>
        </div>
        </div>

        <?php 
            $a=$a+1;  } 
            ?> 
                
    </body>
</html>