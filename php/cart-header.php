<header id="header">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="shoppingMenu.php" class="navbar-brand">
			<h3 class="px-5">
				<i class="fas fa-shopping-basket"></i> Shopping Menu
			</h3>
		</a>
		<ul class="navbar-nav mr-auto">
			<li class="nav_item">
        		<a class="nav-link" href="homepage.php">HOME</a>
			</li>
			<li class="nav-item">
        		<a class="nav-link" href="userOrderHistory.php">Orders</a>
	  		</li>
		</ul>
		<button class="navbar-toggler" 
		type="button" 
		data-toggle="collapse" 
		data-target="#navbarNavAltMarkup" 
		aria-controls="navbarNavAltMarkup"
		aria-expanded="false"
		aria-label="Toggle navigation"
		>
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="mr-auto"></div>
			<div class="navbar-nav">
				<a href="cart.php" class="nav-item nav-link active">
					<h5 class="px-5 cart">
						<i class="fas fa-shopping-cart"></i> Cart 
						<!--<span id='cart_count' class="text-warning bg-light">0</span>-->
						<!-- php

							if(isset($_SESSION['cart']))
							{
								$count=count($_SESSION['cart']);
								echo "<span id='cart_count' class='text-warning bg-light'>$count</span>";
							}
							else
							{
								echo "<span id='cart_count' class='text-warning bg-light'>0</span>";
							}

						-->
					</h5>
				</a>
			</div>
		</div>

	</nav>
</header>