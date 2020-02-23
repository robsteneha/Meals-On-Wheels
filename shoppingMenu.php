<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/shopping-cart-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .card-columns {
  @include media-breakpoint-only(lg) {
    column-count: 10;
  }
}
    </style>
    <title>MENU</title>
  </head>
  <body>
  
    <?php
        require_once('php/cart-header.php')
    ?>
    <div class="card-columns" >

    <?php
        $sql="select * FROM foodcategory";
        $result=$con->query($sql);
        function Menu($categoryname,$categoryimg,$categoryid){
            $element="<div class=\"card\" style=\"width:18rem; margin:20px;\"  >
                        <form action=\"$categoryname.php\" method=\"post\" >
                            <div class=\"card shadow\">
                                <div>
                                    <img src=\"images/$categoryimg\" alt=\"image1\"  class=\"img-fluid card-img-top\" >
                                </div>
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">$categoryname</h5>
                                    
                                    <p class=\"card-text\">
                                        Some quick example text to build on the card.
                                    </p>        
                                    <button type=\"submit\" name=\"view\" class=\"btn btn-warning my-3\">View Category <i class=\"fas fa-shopping-cart\"></i></button>
                                    <input type='hidden' name='product_id' value='$categoryid'>
                                </div>
                            </div>
                        </form>
                    </div>
                    
            ";
            echo $element;
        }
    
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                //echo"<tr><td>".$row["id"]."</td><td>".$row["category_id"]."</td><td>".$row["title"]."</td><td>".$row["price"]."</td><td>".$row["image"]."</td><td>".$row["createdOn"]."</td></tr>";
                
                Menu($row['cat_name'],$row['cat_image'],$row['id']);
                
            }
        }
        else{
            echo"0 result";
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