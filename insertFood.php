<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Food</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<body style="background-color: #bdc3c7">

<div>
        <form class="myform" action="insertFood.php" method="post">
                <h1>INSERT FOOD</h1>
            <!--<label><b>Username:</label><br>-->
            <input name="categoryid" type="text" class="inputvalues" placeholder="Type Category id" required/></br>
            <!--<label><b>Password:</label><br>-->
            <input name="title" type="text" class="inputvalues" placeholder="Type food name" required/></br>
            <input name="price" type="text" class="inputvalues" placeholder="Type price in ₹" required/></br>
            <input name="image" type="text" class="inputvalues" placeholder="Type image link" required/></br>
            <input name="insert_btn" type="submit" id="signup_btn" value="INSERT"/><br>
            <a href="admin-home.php"><input type="button" id="back_btn" value="<< Back to Home"/></a>
        </form>

        <?php
            if(isset($_POST['insert_btn']))
            {
                //echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
                $categoryid=$_POST['categoryid'];
                $title=$_POST['title'];
                $price=$_POST['price'];
                $image=$_POST['image'];
                
                $query= "insert into food(category_id,title,price,image) values('$categoryid','$title','$price','$image')";
                $query_run = mysqli_query($con,$query);

                if($query_run)
                {
                    echo '<script type="text/javascript"> alert("New food item inserted") </script>';
                }
                else
                {
                    echo '<script type="text/javascript"> alert("Error...") </script>';    
                } 
            }           
        ?>
        
    </div>





</body>
</html>
