<?php
    require 'dbconfig/config.php';
    require 'getLoggedInUserId.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <style> 
        .card-columns {
  @include media-breakpoint-only(lg) {
    column-count: 10;
  }
}
    </style>-->
    <title>MENU</title>
  </head>
  <body>
  
    <?php
        require_once('php/cart-header.php')
    ?>
    <div class="card-columns" >

    <?php

        $sql="select * FROM food where category_id=3";
        $result=$con->query($sql);
        function displayFood($categoryname,$categoryimg,$categoryid,$price){
            $element="<div class=\"card\" style=\"width:18rem; margin:20px;\"  >
            <form action=\"non vegetarian.php?action=add&id=$categoryid\" method=\"get\" class=\"cart-items\">
                            <div class=\"card shadow\">
                                <div>
                                    <img src=\"images/$categoryimg\" alt=\"image1\"  class=\"img-fluid card-img-top\" >
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">$categoryname</h5>
                                    
                                    <p class=\"card-text\">
                                    <h6>₹ $price</h6>
                                    </p>        
                                    <button type=\"submit\" name=\"add$categoryid\" class=\"btn btn-warning my-3\">Add To Cart <i class=\"fas fa-shopping-cart\"></i></button>
                                    <input type='hidden' name='product_id' value='$categoryid'>
                                </div>
                            </div>
                        </form>
                    </div>
            ";
            echo $element;
        }

        function addToCart($id,$userid,$con)
        {
            $sql="select * FROM orderHistory where f_id=$id and category_id=3 and c_id='$userid' and order_status='P'";
            
            $result=$con->query($sql);
            
            if($result->num_rows>0)
            {
                echo '<script type="text/javascript"> alert("food already exists in cart... Try another food") </script>';
            }
            else
            {
                
                
                $query1="select * from food where id=$id and category_id=3";
                
                $result1=$con->query($query1);
                
                if($result1->num_rows>0)
                {
                    $row=$result1->fetch_assoc();
                    $price=$row['price'];
                    $title=$row['title'];
                    //echo"userid= $userid";
                    //echo"fid=$id";
                    //echo"price= $price";
                    //echo"title=$title";
                	$query2= "INSERT INTO `orderhistory` (`c_id`, `category_id`, `f_id`, `f_title`, `f_price`, `quantity`, `totalAmount`, `order_status`) VALUES ($userid, '3', $id, '$title', '$price', '1', NULL, 'P')";
                	$result2=$con->query($query2);

                	if($result2)
                	{
                    	echo '<script type="text/javascript"> alert("Product added to the cart succesfully") </script>';
                	}
                	else
                	{
                    	echo '<script type="text/javascript"> alert("Error in inserting...") </script>';    
                	}
            	}
            }
        }
    
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                //echo"<tr><td>".$row["id"]."</td><td>".$row["category_id"]."</td><td>".$row["title"]."</td><td>".$row["price"]."</td><td>".$row["image"]."</td><td>".$row["createdOn"]."</td></tr>";
                
                displayFood($row['title'],$row['image'],$row['id'],$row['price']);
                
            }
        }
        else{
            echo"0 result" ;
        }
        
        if(isset($_GET['add15']))
        {
            addToCart(15,$userid,$con);
        }
        else if(isset($_GET['add16']))
        {
            addToCart(16,$userid,$con);
        }
        elseif(isset($_GET['add17']))
        {
            addToCart(17,$userid,$con);
        }
        elseif(isset($_GET['add18']))
        {
            addToCart(18,$userid,$con);
        }
        elseif(isset($_GET['add19']))
        {
            addToCart(19,$userid,$con);
        }
        elseif(isset($_GET['add20']))
        {
            addToCart(20,$userid,$con);
        }
        elseif(isset($_GET['add21']))
        {
            addToCart(21,$userid,$con);
        }
        

    ?>
    </div>;

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>