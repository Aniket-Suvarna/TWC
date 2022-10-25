<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $_REQUEST['category'];
    $_REQUEST['amount'];
    $_REQUEST['urgency'];
    $_REQUEST['locality'];

    $command = escapeshellcmd("python DonateAlgorithm.py $_REQUEST[category] $_REQUEST[amount] $_REQUEST[urgency] $_REQUEST[locality]");
    $output = shell_exec($command);

    $iparr = explode("*", $output);

    $Category = $iparr[0];
    $Category = explode(",", $Category);
    $Category = str_replace("'", " ",$Category);
    $Category = str_replace("0", " ",$Category);
    $Category = str_replace("[", " ",$Category);
    $Category = str_replace("]", " ",$Category);

    $Amount = $iparr[1];
    $Amount = explode(",", $Amount);
    $Amount = str_replace("'", " ",$Amount);
    $Amount = str_replace("[", " ",$Amount);
    $Amount = str_replace("]", " ",$Amount);


    $Time = $iparr[2];
    $Time = explode(",", $Time);
    $Time = str_replace("'", " ",$Time);
    $Time = str_replace("[", " ",$Time);
    $Time = str_replace("]", " ",$Time);


    $Place = $iparr[3];
    $Place = explode(",", $Place);
    $Place = str_replace("'", " ",$Place);
    $Place = str_replace("[", " ",$Place);
    $Place = str_replace("]", " ",$Place);

    $Title =$iparr[4];
    $Title = explode(",", $Title);
    $Title = str_replace("'", " ",$Title);
    $Title = str_replace("[", " ",$Title);
    $Title = str_replace("]", " ",$Title);

    $Image =$iparr[5];
    $Image = explode(",", $Image);
    $Image = str_replace("'", "",$Image);
    $Image = str_replace("[", "",$Image);
    $Image = str_replace("]", "",$Image);

    $Payment =$iparr[6];
    $Payment = explode(",", $Payment);
    $Payment = str_replace("'", "",$Payment);
    $Payment = str_replace("[", "",$Payment);
    $Payment = str_replace("]", "",$Payment);


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

                    <li class="navbar-brand active"><a href="../Sign_in/Home_Login.html"><img  src="../Images/logo1.png"  width="160" height="60"></a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Home_Login.html">Home</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Events_login.php">Events</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/News_login.html">News</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/gallery_login.html">Gallery</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Blogs_main_login.php">Blogs</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Shop_login.html">Shop</a></li>

                    <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Emergency_login.html">Emergency</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-brand active"><a href="https://pages.razorpay.com/pl_IBxYh02ZmnrMLm/view"><i class="donate links">Donate Universal</i></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-brand active"><a class="nav-link links" href="../PHP/logout.php">Sign Out</a></li>
                </ul>
            </div>
        </nav>
        <br><br>
	    <main>
		<section class="more-news">
			<div class="news-section ">
            <?php $b=0;
                    foreach($Category as $rows1)
                    {
                    ?> 
                    <article class="education">
					<h3><?php echo $Title[$b];?></h3>
					<img src="../DonateUpdate/<?php $Image[$b] = str_replace(" ", "",$Image[$b]); echo($Image[$b]);?>">
					<p><b>Amount:</b><?php echo $Amount[$b];?><br>
                    <b>Locality:</b><?php echo $Place[$b];?><br>
                    <b>Category:</b><?php echo $Category[$b];?></p>
                    <a href="<?php echo $Payment[$b];?>" class="nav-link borbutton active">Donate</a>
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
