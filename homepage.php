<?php
	require("getLoggedInUserId.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/dropdown.css">
    <link rel="stylesheet" href="css/footer-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <div class="main">
        <div class="logo">
            <b>MEALS ON WHEELS
        </div>
        <ul>
            <li class="active"><a href="#">HOME</a></li>
            <!-- <li><a href="#">RESTRAUNTS</a></li> -->
            <li><a href="shoppingMenu.php">FOOD MENU</a></li>
            <li><a href="#">Hi <?php echo $_SESSION['username']; ?>!</a>
                <ul>
					<!-- <li><a href="#">SETTINGS</a></li> -->
                    <li><a href="cart.php">CART</a></li>
                    <li><a href="userOrderHistory.php">ORDERS</a></li>
                    <!-- <li><a href="#">TRACK ORDER</a></li> -->
                    <li><a href="logout.php">LOG OUT</a></li>
                </ul>
            </li>
            <!--<li><a href="#">My Account</a></li>-->
        </ul>	
    </div> 
    <style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		.parallaxone1{
			width:100%;
			height: 950px;
			background-size: 100% 100%;
			background-attachment: fixed; 
			background-image: linear-gradient(rgba(0,0,0,0.7),rgba(1,0,0,0.5)), url(images/dinner.jpg);
			text-align: center;
		}

		.parallaxone1 h2{
			position: absolute;
			/*top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);*/
			top: 500px;
			width: 200px;
			height: 30px;
			padding: 10px;
			background-color: black;
			color: white;
			margin-left: 44%;
		}

		.parallaxone2{
			width:100%;
			height: 950px;
			background-size: 100% 100%;
			background-attachment: fixed; 
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/indian.jpg);

		}

		.parallaxone2 h2{
			position: relative;
			top: 400px;
			width: 500px;
			height: 30px;
			padding: 10px;
			background-color: black;
			color: white;
			text-align: center;

		}

		.parallaxone3{
			width:100%;
			height: 950px;
			background-size: 100% 100%;
			background-attachment: fixed; 
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,.7)),url(images/taco.jpg);

		}

		.parallaxone3 h2{
			position: relative;
			top: 400px;
			width: 400px;
			height: 30px;
			padding: 10px;
			background-color: black;
			color: white;
			text-align: center;

		}

		.para{
			height: 100%;
			width: 94.76%;
			padding: 50px;
			text-align: center;
			background-color: black;
			color: white;
		}

	</style>   
</head>
<body >

<div class="parallaxone1">
        <center><h2> ORDER NOW
        </h2></center>
</div>



<div class="parallaxone2">
        <center><h2> LOST OF VARITIES TO CHOOSE FROM
        </h2></center>
</div>



<div class="parallaxone3">
        <center><h2> GOOD FOOD GOOD LIFE
        </h2></center>
</div>
<!-- process -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/services.png" class="d-block w-100" alt="services">
    </div>
  </div>
</div>
<!-- footer -->
<section class="footer">
    <p>
        
        <br></br>
        <center><h1>CONTACT US</h1></center>
        <br></br>
        <br></br>
    </p>
    <div class="contact-info">
        <div class="card">
            <i class="card-icon fas fa-envelope"></i>
            <p>email@domain</p>
        </div>
        <div class="card">
            <i class="card-icon fas fa-phone"></i>
            <p>+91 1234567890</p>
        </div>
        <div class="card">
            <i class="card-icon fas fa-map-marker-alt"></i>
            <p>Bengaluru, Karnataka</p>
        </div>
    </div>
</section>
<div class="footer">
    <p>
        <br></br>
        <br></br>
        <br></br>
    </p>
</div>
</body>
        
</html>