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
    <style>
        table{
            margin-top:30px;
            margin-left: 20px;
            margin-right: 20px;
            border-collapse: collapse;
            width:98%;
            color: #588c7e;
            font-family: monospace;
            font-size:20px;
            text-align: left;
        }
        th{
            background-color: #588c7e;
            color: black;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
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
<div> 
    <?php
        function displayF($title,$image,$quantity,$price){
        $element=
        "<div class=\"card\" style=\"width:18rem; margin:20px;\"  >
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"images/$image\" alt=\"image1\"  class=\"img-fluid card-img-top\" style=\"height:250px\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$title</h5>
                            
                            <p class=\"card-text\">
                            <h6>₹ $price</h6>
                            <h6>Quantity: $quantity</h6>
                            </p>        
                        </div>
                    </div>
            </div>
    ";
    echo $element;
        }
        $sql="select * FROM orderhistory where c_id=$userid and order_status='c'";
        $result=$con->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                $foodid=$row['f_id'];
                $sql2="select * FROM food where id=$foodid";
                $result2=$con->query($sql2);
                if($result2->num_rows>0)
                {
                    $row2=$result2->fetch_assoc();
                    $img=$row2['image'];
                    displayF($row['f_title'],$img,$row['quantity'],$row['totalAmount']);
                }
                
            }
    
    }
        
    ?>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>