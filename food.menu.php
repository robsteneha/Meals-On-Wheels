<!DOCTYPE html>
<html>
<head>
	<title>Add to cart functionality in php and mysql</title>
	<!-- Latest compiled and minified CSS 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
 jQuery library 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 Latest compiled JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.alert, #loader {
    	display: none;
    }
    .glyphicon, #itemCount {
    	font-size: 18px;
    }
</style>
<body>
	<div class="container">
		<pre style="padding: 0; margin: 0;">
		<h2 style="margin-top: 0px; padding-top: 0; padding-left: 5px; ">foodmenu</h2></pre>
		<hr>

		<!--<?php 
			require_once('dbconfig/dbconnect.php');
            $db   = new DbConnect();
            $conn = $db->connect();
			require 'classes/customer.class.php';
	    	$objCustomer = new customer($conn);
	    	$objCustomer->setEmail('durgesh@gmail.com');
	    	$customer = $objCustomer->getCustomerByEmailId();
	    	session_start();
	    	$_SESSION['cid'] = $customer['id'];
			require 'classes/cart.class.php';
			$objCart = new cart($conn);
			$objCart->setCid($customer['id']);
			$cartItems = $objCart->getAllCartItems();
		?>
		<div class="row">
	    	<div class="col-md-12 text-right">
	    		<a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><sup id="itemCount"><?php echo count($cartItems); ?></sup></a>
	    	</div>
	    </div>

	    <div class="row">
	    	<div class="col-md-10 col-md-offset-1">
				<div class="alert alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
					<div id="result"></div>
				</div>
				<center><img src="images/loader.gif" id="loader"></center>
			</div>
-->
		<div class="row">
	    	<?php 
		    	require 'classes/foodmenu.class.php';
		    	$objfoodmenu = new foodmenu($conn);
		    	$foods = $objfoodmenu->getAllFood();
		    	foreach ($foods as $key => $food) {
		    ?>

		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="images/<?= $food['image']; ?>" alt="" style="width: 200px; height: 200px;">
		      <div class="caption">
		        <h3><?= $food['title']; ?></h3>
		        <p><?= substr($food['description'], 0, 60) . '...'; ?></p>
		        <p>
		        	<div class="row">
		        		<div class="col-sm-6 col-md-6">
		        			<strong>
		        			 <span style="font-size: 18px;">&#x20b9;
		        			 </span>
		        			 <?php number_format( $food['price'], 2 ); ?>
		        			</strong>
		        		</div>
		        		<div class="col-sm-6 col-md-6">
		        			<button class="btn btn-success" onclick="addToCart(<?=$food['id'];?>)" role="button">Book Seat</button>
		        			<!--<?php 
		        				$disButton = "";
		        				if( array_search($food['id'], array_column($cartItems, 'pid')) !==false ) {
		        					$disButton = "disabled";
		        				}
		        			 ?>
		        			<button id="cartBtn_<?=$food['id'];?>" <?php echo $disButton; ?> class="btn btn-success" onclick="addToCart(<?=$food['id'];?>, this.id)" role="button">Book Seat</button>-->
		        		</div>
		        	</div>
		        </p>
		      </div>
		    </div>
		  </div>
		<?php } ?>
		</div>
		<!--<div class="row">
	    	<div class="col-md-12 text-right">
	    		<a href="cart.php" class="btn btn-success">Seats <span class="glyphicon glyphicon-play"></span></a>
	    	</div>
	    </div>
	</div>

	<div style="position: fixed; bottom: 10px; right: 10px; color: green;">
        <strong>
            Durgesh Sahani
        </strong>
    </div>
</body>
<script type="text/javascript">
	function addToCart(wId, btnId) {
		
		$('#loader').show();
		$.ajax({
			url: "action.php",
			data: "wId=" + wId + "&action=add",
			method: "post"
		}).done(function(response) {
			var data = JSON.parse(response);
			$('#loader').hide();
			$('.alert').show();
			if(data.status == 0) {
				$('.alert').addClass('alert-danger');
				$('#result').html(data.msg);
			} else {
				$('.alert').addClass('alert-success');
				$('#result').html(data.msg);
				$('#'+btnId).prop('disabled',true);
				$('#itemCount').text( parseInt( $('#itemCount').text() ) + 1);
			}
			
		})
	}
</script>-->
</html>