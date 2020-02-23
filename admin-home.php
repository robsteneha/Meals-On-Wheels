<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Home</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/skewed-menu-styles.css">
  
  

</head>
<body>
  <!-- side bar -->
  
  <!-- nav bar -->
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Meals On Wheels</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="selectOrderHistory.php">View Order History</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Update Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="insertFood.php">Insert Food</a>
          <a class="dropdown-item" href="deleteFood.php">Delete FOOD</a>
          <a class="dropdown-item" href="updateFood.php">Update FOOD</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="selectAllFood.php">View Menu</a>
        </div>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>-->
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
    <form class="form-inline my-2 my-lg-0" method="post">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout">LogOut</button>

	  </form>
	  <?php
            if(isset($_POST['logout']))
            {
                session_destroy();
                header('location:index.php');
            }
        ?>
  </div>
</nav>
</div>
<!-- the skewed menu -->
<div class="container" >
	<br>
</br>
	<br>
</br>
		<div class="box">
			<div class="content">
				<h2>01</h2>
				<h3>VIEW ORDER HISTORY</h3>
				<p>Select to view the order hitory of all the customers.</p>
				<a href="selectOrderHistory.php">VIEW</a>
			</div>
		</div>
		<div class="box">
			<div class="content">
				<h2>02</h2>
				<h3>VIEW MENU</h3>
				<p>Select to insert a new food item into the menu.</p>
				<a href="selectAllFood.php">VIEW</a>
			</div>
		</div>
		<div class="box">
			<div class="content">
				<h2>03</h2>
				<h3>Insert Food Item</h3>
				<p>Great content! Your works has helped me lots of time. Still, I want to know what app are you using for the coding? </p>
				<a href="insertFood.php">INSERT</a>
			</div>
		</div>
		<div class="box">
			<div class="content">
				<h2>04</h2>
				<h3>Modify Food Price</h3>
				<p>Great content! Your works has helped me lots of time. Still, I want to know what app are you using for the coding? </p>
				<a href="updateFood.php">UPDATE</a>
			</div>
		</div>
		<div class="box">
			<div class="content">
				<h2>05</h2>
				<h3>Delete Food Item</h3>
				<p>Great content! Your works has helped me lots of time. Still,  </p>
				<a href="deleteFood.php">DELETE</a>
			</div>
		</div>
</div>
		<!--<div class="box">
			<div class="content">
				<h2>07</h2>
				<h3>Service five</h3>
				<p>Great content! Your works has helped me lots of time. Still, I want to know what app are you using for the coding? </p>
				<a href="#">Read More</a>
			</div>
		</div>
		<div class="box">
			<div class="content">
				<h2>08</h2>
				<h3>Service three</h3>
				<p>Great content! Your works has helped me lots of time. Still, I want to know what app are you using for the coding? </p>
				<a href="#">Read More</a>
			</div>
		</div>
		<div class="box">
			<div class="content">
				<h2>09</h2>
				<h3>Service four</h3>
				<p>Great content! Your works has helped me lots of time. Still,  </p>
				<a href="#">Read More</a>
			</div>
		</div>
		<div class="box">
			<div class="content">
				<h2>10</h2>
				<h3>Service five</h3>
				<p>Great content! Your works has helped me lots of time. Still, I want to know what app are you using for the coding? </p>
				<a href="#">Read More</a>
			</div>
		</div>
		<div class="box">
			<div class="content">
				<h2>11</h2>
				<h3>Service four</h3>
				<p>Great content! Your works has helped me lots of time. Still,  </p>
				<a href="#">Read More</a>
			</div>
		</div>
		<div class="box">
			<div class="content">
				<h2>12</h2>
				<h3>Service five</h3>
				<p>Great content! Your works has helped me lots of time. Still, I want to know what app are you using for the coding? </p>
				<a href="#">Read More</a>
			</div>
		</div>
	</div>

-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
