<?php

	//start session
	session_start();

	require_once('dbconfig/config.php');
	require_once('./php/component.php');

	//create instance of createcartDB class

	if(isset($_POST['add'])){
		//print_r($_POST['product_id']);
		//select from cart table to see if it already in the cart
		if(isset($_SESSION['cart']))
		{
			$item_array_id=array_column($_SESSION['cart'],"product_id");
			//print_r($_SESSION['cart']);
			//print_r($item_array_id);

			if(in_array($_POST['product_id'],$item_array_id))
			{
				echo"<script>alert('Product is already added to the cart!!!')</script>";
				echo"<script>window.location='shopping-cart.php'</script>";
			}
			else
			{
				$count=count($_SESSION['cart']);
				$item_array=array('product_id'=>$_POST['product_id']);

				$_SESSION['cart'][$count]=$item_array;
				//print_r($_SESSION['cart']);
			}
		}
		else
		{
			$item_array=array('product_id'=>$_POST['product_id']);

			//create new session variable
			$_SESSION['cart'][0]=$item_array;
			//print_r($_SESSION['cart']);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Menu</title>

	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/shopping-cart-styles.css">

</head>
<body>

	<?php require_once("php/cart-header.php")?>

	<div class="container">
		<div class="row text-center py-5">
			<?php
			//get the categid from session
			//write sql query to get all the items of a category
				$sql="select * FROM food where category_id=1";
        		$result=$con->query($sql);

        		if($result->num_rows>0)
        		{
            		while($row=$result->fetch_assoc())
            		{
							component($row['title'],$row['price'],$row['image'],$row['id']);

            		}
        		}
        		else{
            		echo"0 result";
        		}
			?>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>