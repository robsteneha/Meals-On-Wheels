<?php

require 'dbconfig/config.php';
require 'getLoggedInUserId.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cart</title>

	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/shopping-cart-styles.css">
</head>
<body class="bg-light">
	
	<?php
		require_once('php/cart-header.php')
	?>

	<div class="container-fluid">
		<div class="row px-5">
			<div class="col-md-7">
				<div class="sping-cart">
					<h6>My Cart</h6>
					<hr>

					<?php
                        function cartElement($productimg,$productname,$productprice,$productid){
                            $element="
                            <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                                <div class=\"border rounded\">
                                    <div class=\"row bg-white\">
                                        <div class=\"col-md-3 py-1 px-0\">
                                            <img src=images/$productimg alt=\"Image1\" class=\"img-fluid\">
                                        </div>
                                        <div class=\"col-md-6\">
                                            <h5 class=\"pt-2\">$productname</h5>
                                            <h5 class=\"pt-2\">₹ $productprice</h5>
                                        </div>  
                                    </div>
                                </div>
                            </form>
                            ";
                            echo $element;
                        }
						
                        //write the query to display cart items here
                        $sql="select * FROM orderhistory where c_id=$userid and order_status='p'";
                        $result=$con->query($sql);

                        if($result->num_rows>0)
                        {
                            while($row=$result->fetch_assoc())
                            {
                                $foodid=$row['f_id'];
                                $price=$row['f_price'];
                                $title=$row['f_title'];
                                $sql2="select * FROM food where id=$foodid";
                                $result2=$con->query($sql2);

                                if($result2->num_rows>0)
                                {
                                $row2=$result2->fetch_assoc();
                                $img=$row2['image'];
                                cartElement($img,$title,$price,$foodid);
                                $hii='hi';
                                }
                            }
                        }
						else
						{
							echo "<h5>Cart is empty</h5>";
						}
					?>

				</div>
			</div>
			<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
				
				<div class="pt-4">
					<h6>PRICE DETAILS</h6>
					<hr>
					<div class="row price-details">
						<div class="col-md-6">
                        <!-- call one stored procedure here -->
							<?php
                               
                                $sql3="select count(*) as count,sum(totalAmount) as total FROM orderhistory where c_id=$userid  and order_status='p'";
                                
                                //$sql3="call getCountAndTotal(1);";
                                $result3=$con->query($sql3);

                                if($result3->num_rows>0)
                                {
                                    $row3=$result3->fetch_assoc();
                                    $count=$row3['count'];
                                    $total=$row3['total'];
                                    echo "<h6>Price ($count items)</h6>";
                                }
							?>
							<h6>Delivery Charges</h6>
							<hr>
							<h6>Amount Payable</h6>
						</div>
						<div class="col-md-6">
							<h6>₹ <?php echo $total; ?></h6>
							<h6 class="text-success">FREE</h6>
							<hr>
							<h6>₹ <?php
							echo $total;
							?></h6>
                            <form action="cart.php" method="get">
                            <input name="submit_btn" type="submit" class="btn btn-warning" value="Confirm Order" style="margin-bottom:10px;"/><br>
                            </form>
                            <?php
                                if(isset($_GET['submit_btn']))
                                {
                                    //call one stored procedure here
                                    //$query5= "UPDATE orderhistory set order_status='c' where c_id=$userid and order_status='p' ";
                                    $query5="call 	confirmOrder($userid);";
                                    $query_run5 = mysqli_query($con,$query5);
                                    if($query_run5)
                                    {
                                        
                                        echo '<script type="text/javascript"> alert("ORDER CONFIRMED") </script>';
                                        echo"<script>window.location='cart.php'</script>";
                                    }
                                    else
                                    {
                                        echo '<script type="text/javascript"> alert("Error...") </script>';    
                                    }
                                }
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

