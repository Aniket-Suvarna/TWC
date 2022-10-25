<?php 

$mydb=new mysqli("localhost","root","","webbase");
	if ($mydb -> connect_error) {
	echo "Failed to connect: ";
	}
	else{
		$sql = "SELECT `Topic`, `shortcontent`, `longcontent`, `paylink`, `Imagename` FROM `donate`";
        $result = $mydb->query($sql);
    }
    print($rows['paylink']);

?>





<!DOCTYPE html>
<html>

<head>
	<title>
		Donate
	</title>
	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=615a8051a2a5620019d27300&product=sticky-share-buttons" async="async"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../CSS/style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
</head>

<body>
	<header>
		<img src="../Images/logo1.png" height="50px" width="150">
		<section class="more-news">
			<div class="news-section ">
            <?php $b=1;
            while($rows= mysqli_fetch_assoc ($result)) 

            {
            
            ?> 
				<article class="world">
					<img src="../Test/<?php echo $rows['Imagename'];?>">
					<h3><?php echo $rows['Topic'];?></h3>
					<p><?php echo $rows['shortcontent'];?>
						<span id="dots<?php print($b); ?>">...</span><span id="more<?php print($b); ?>" style="display: none;"><br>
                            <?php echo $rows['longcontent'];?>
                            <a href="<?php echo $rows['paylink'];?>">Donate</a>
						</span>
					</p>
					<button class='btn btn-secondary' onclick="myFunction<?php print($b); ?>()" id="Button<?php print($b); ?>">Read more</button>
				</article>
		
				<script>
                function myFunction<?php print($b); ?>() {
                    var dots = document.getElementById("dots<?php print($b); ?>");
                    var moreText = document.getElementById("more<?php print($b); ?>");
                    var btnText = document.getElementById("Button<?php print($b); ?>");

                    if (dots.style.display === "none") {
                        dots.style.display = "inline";
                        btnText.innerHTML = "Read more";
                        moreText.style.display = "none";
                    } else {
                        dots.style.display = "none";
                        btnText.innerHTML = "Read less";
                        moreText.style.display = "inline";
                    }
                }
            </script>
            <?php 
            $b=$b+1;  } 
            ?> 
			</div>
			


    
    </section>
    
</body>

</html>