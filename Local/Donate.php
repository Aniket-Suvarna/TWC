<?php 

$mydb=new mysqli("localhost","root","","webbase");
	if ($mydb -> connect_error) {
	echo "Failed to connect: ";
	}
	else{
		$sql = "SELECT `ID`, `Category`, `Gender`, `Urgency`, `Duration`, `Amount`, `Locality`, `Title`, `Image`, `Payment` FROM `donateml`";
    $result = $mydb->query($sql);
    }
?>

<!DOCTYPE html>
<html>

<head>
	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=615a8051a2a5620019d27300&product=sticky-share-buttons" async="async"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../CSS/Donate.css">
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
        .borbutton{
            color: #FF7B2E;
            border-color: #FF7B2E;
            border: 2px;
            border-style: solid;
        }
        .borbutton:hover{
            background-color: #FF7B2E;
            color: black;
        }    
    </style>
</head>

<body>

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
                    <li class="navbar-brand active"><a href="https://pages.razorpay.com/pl_IBxYh02ZmnrMLm/view"><i class="donate links">Donate Universal</i></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-brand active"><a href="../Local/Filter.php"><i class="donate links">Filter</i></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-brand active"><a class="nav-link links" href="../Local/Sign_in.html">Sign In</a></li>
                </ul>
            </div>
        </nav>
        <br><br>
	    <main>
		<section class="more-news">
			<div class="news-section ">
            <?php $b=1;
                    while($rows= mysqli_fetch_assoc ($result)) 

                    {
                    ?> 
				<article class="education">
					<h3><?php echo $rows['Title'];?></h3>
					<img src="../DonateUpdate/<?php echo $rows['Image'];?>">
					<p><b>Amount:</b><?php echo $rows['Amount'];?><br>
                    <b>Locality:</b><?php echo $rows['Locality'];?><br>
                    <b>Category:</b><?php echo $rows['Category'];?></p>
                    <a href="<?php echo $rows['Payment'];?>" class="nav-link borbutton active">Donate</a>
                    <br><br>
				</article>
            
                <?php 
                    $b=$b+1;  } 
                ?> 
			</div>
		</section>
	</main>
	
</body>

</html>