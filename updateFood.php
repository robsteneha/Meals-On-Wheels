<?php
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Food</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<body style="background-color: #bdc3c7">

<div>
        <form class="myform" action="updateFood.php" method="post">
                <h1>UPDATE FOOD</h1>
            <!--<label><b>Username:</label><br>-->
            <input name="categoryid" type="text" class="inputvalues" placeholder="Type Category id" required/></br>
            <!--<label><b>Password:</label><br>-->
            <input name="title" type="text" class="inputvalues" placeholder="Type food name" required/></br>
            <input name="price" type="text" class="inputvalues" placeholder="Type new price" required/></br>
            <input name="delete_btn" type="submit" id="signup_btn" value="UPDATE"/><br>
            <a href="admin-home.php"><input type="button" id="back_btn" value="<< Back to Home"/></a>
        </form>

        <?php
            if(isset($_POST['delete_btn']))
            {
                //echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
                $categoryid=$_POST['categoryid'];
                $title=$_POST['title'];
                $price=$_POST['price'];
                
                $query= "UPDATE food set price=$price where title like '%$title%' and category_id=$categoryid";
                $query_run = mysqli_query($con,$query);

                if($query_run)
                {
                    echo '<script type="text/javascript"> alert("food item updated") </script>';
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
